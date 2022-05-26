const images = [
	'https://images.unsplash.com/photo-1652972756954-70d7d5ecc0e5?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670',
	'https://images.unsplash.com/photo-1652608467152-23d02afc18dc?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770',
	'https://images.unsplash.com/photo-1653045649098-4fa866974b43?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770','https://images.unsplash.com/photo-1461749280684-dccba630e2f6?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469','https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870'
]

class App {
	constructor() {
		this.width = window.innerWidth;
		this.height = window.innerHeight;
		this.renderer = new THREE.WebGLRenderer({
			// antialias: true,
			alpha: true,
		});
		document.body.appendChild(this.renderer.domElement)
		this.renderer.setClearColor(0x000000);
		this.renderer.setSize(this.width, this.height);
		this.renderer.setPixelRatio(Math.min(2, window.devicePixelRatio));
		this.camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);
		this.scene = new THREE.Scene();
		
		this.current = 0;
		this.next = 1;
		
		this.loadTextures(() => {
			this.addObjects();
			// this.addLighting();
			// this.addSettings();
			this.resize();
			window.addEventListener("resize", this.resize.bind(this), {
				passive: true
			});
			window.addEventListener("click", this.click.bind(this));
			this.render();
		});
		
	}
	click() {
		if (!this.tween || (this.tween && !this.tween.isActive())) {
			this.tween = gsap.to(this.uniforms.uProgress, {
			value: 1.0,
			ease: [0.32, 0, 0.67, 0],
			duration: 1.4,
			onComplete: () => {
				this.current = this.current + 1;
				if (this.current > images.length - 1) {
					this.current = 0;
				}
				this.next = this.next + 1;
				if (this.next > images.length - 1) {
					this.next = 0;
				}
				this.uniforms.uCurrentImage.value = this.textures[this.current];
				this.uniforms.uNextImage.value = this.textures[this.next];
				this.resize();
				this.uniforms.uProgress.value = 0.0;
			}
		});
		}
	}
	addSettings() {
		this.gui = new dat.GUI();
		this.settings = { progress: 0 };
		this.gui.add(this.settings, 'progress', 0, 1, 0.01);
	}
	addLighting() {
		// ambient light
		this.light1 = new THREE.AmbientLight( 0x404040 );
		this.scene.add( this.light1 );
		
		// point light
		this.light2 = new THREE.PointLight( 0xFFFFFF, 1, 100 );
		this.light2.position.set( 2, 2, 2 );
		this.scene.add( this.light2 );
	}
	loadTextures(cb) {
		const promises = []
		this.textures = [];
		images.forEach((imgUrl, i) => {
			let promise = new Promise(resolve => {
        this.textures.push(new THREE.TextureLoader().load( imgUrl, resolve ));
      });
      promises.push(promise);
		});
		Promise.all(promises).then(() => {
			cb()
		})
	}
	addObjects() {
		this.geometry = new THREE.PlaneBufferGeometry(2, 2);
		this.uniforms = {
			uTime: { value: 0.0 },
			uProgress: { value: 0.0 },
			uScreenRes: { value: new THREE.Vector2() },
			uCurrentImage: { value: this.textures[this.current] },
			uCurrentImageRes: { value: new THREE.Vector2() },
			uNextImage: { value: this.textures[this.next] },
			uNextImageRes: { value: new THREE.Vector2() },
		};
		this.material = new THREE.ShaderMaterial({
			uniforms: this.uniforms,
			vertexShader: document.getElementById("vertexShader").textContent,
			fragmentShader: document.getElementById("fragmentShader").textContent,
			transparent: true,
			depthTest: false,
			side: THREE.DoubleSide,
			// blending: THREE.AdditiveBlending,
			// wireframe: true,
		});
		this.mesh = new THREE.Mesh(this.geometry, this.material);
		this.scene.add(this.mesh);
	}
	resize() {
		this.width = window.innerWidth;
		this.height = window.innerHeight;
		this.renderer.setSize(this.width, this.height);
		
		this.uniforms.uScreenRes.value = new THREE.Vector2(this.width, this.height);
		this.uniforms.uCurrentImageRes.value = new THREE.Vector2(this.textures[this.current].image.width, this.textures[this.current].image.height);
		this.uniforms.uNextImageRes.value = new THREE.Vector2(this.textures[this.next].image.width, this.textures[this.next].image.height);
		
		// this.camera.aspect = this.width / this.height;
		// this.camera.updateProjectionMatrix();
	}
	render() {
		this.renderer.render(this.scene, this.camera);
		requestAnimationFrame(() => {
			this.uniforms.uTime.value += 0.005;
			// this.uniforms.uProgress.value = this.settings.progress;
			this.render();
		});
	}
}

new App()