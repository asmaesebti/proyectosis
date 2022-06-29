<script type="text/javascript">
	

const regex = /^[\w+\s]+😜{2}$/u;
const text = "este curso es una joda 😜😜😜";

console.log(text.match(regex));


if (regex.test(text)) {
	console.log('Es correcto');
} else {
	console.log('Es incorrecto');
}


</script>