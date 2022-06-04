const { to, set } = gsap;

gsap.registerPlugin(MorphSVGPlugin);

document.querySelectorAll(".upload-button").forEach((button) => {
  const path = button.querySelector(":scope > svg path");
  const dots = button.querySelectorAll(".dots span");

  button.querySelectorAll(".default > div, .success > div").forEach(
      (state) =>
        (state.innerHTML =
          "<div><span>" +
          state.textContent.trim().split("").join("</span><span>") +
          "</span></div>")
    );

  const defaultLetters = button.querySelectorAll(".default span");
  const successLetters = button.querySelectorAll(".success span");
  const successTick = button.querySelector(".success svg");

  const reset = () => {
    to(successTick, {
      strokeDashoffset: "17px",
      duration: 0.15,
    });
    to(successLetters, {
      stagger: 0.075,
      scale: 0.25,
      opacity: 0,
      duration: 0.15,
      onComplete: () => {
        to(defaultLetters, {
          stagger: 0.075,
          scale: 1,
          opacity: 1,
          duration: 0.15,
          onComplete: () => (button.active = false),
        });
      },
    });
  };

  button.addEventListener("click", () => {
    if (button.active) {
      return;
    }

    button.active = true;

    to([...defaultLetters].reverse(), {
      stagger: 0.075,
      keyframes: [
        {
          scale: 1.075,
          duration: 0.15,
        },
        {
          scale: 0.2,
          opacity: 0,
          duration: 0.2,
        },
      ],
      onComplete: () => {
        to(dots, {
          stagger: 0.075,
          keyframes: [
            {
              y: -5,
              scale: 1,
              duration: 0.25,
            },
            {
              y: 5,
              duration: 0.25,
            },
            {
              y: -5,
              duration: 0.25,
            },
            {
              y: 5,
              duration: 0.25,
            },
            {
              y: -5,
              duration: 0.25,
            },
            {
              y: 5,
              scale: 0,
              duration: 0.25,
            },
          ],
        });

        to(path, {
          keyframes: [
            {
              duration: 0.25,
              morphSVG:
                "M2 11C2 7.13405 5.13401 5.00004 9 4.00004C12.866 3.00004 39.7401 -1.99996 66 4.00004C92.2599 10 119.134 5.00004 123 4.00004C126.866 3.00004 130 7.13405 130 11V41C130 44.866 126.866 47 123 48C119.134 49 92.2599 54 66 48C39.7401 42 12.866 47 9 48C5.13401 49 2 44.866 2 41V11Z",
            },
            {
              duration: 0.25,
              morphSVG:
                "M2 11C2 7.13405 5.13401 3.00004 9 4.00004C12.866 5.00004 39.7401 10 66 4.00004C92.2599 -1.99996 119.134 3.00004 123 4.00004C126.866 5.00004 130 7.13405 130 11V41C130 44.866 126.866 49 123 48C119.134 47 92.2599 42 66 48C39.7401 54 12.866 49 9 48C5.13401 47 2 44.866 2 41V11Z",
            },
            {
              duration: 0.25,
              morphSVG:
                "M2 11C2 7.13405 5.13401 5.00004 9 4.00004C12.866 3.00004 39.7401 -1.99996 66 4.00004C92.2599 10 119.134 5.00004 123 4.00004C126.866 3.00004 130 7.13405 130 11V41C130 44.866 126.866 47 123 48C119.134 49 92.2599 54 66 48C39.7401 42 12.866 47 9 48C5.13401 49 2 44.866 2 41V11Z",
            },
            {
              duration: 0.25,
              morphSVG:
                "M2 11C2 7.13405 5.13401 3.00004 9 4.00004C12.866 5.00004 39.7401 10 66 4.00004C92.2599 -1.99996 119.134 3.00004 123 4.00004C126.866 5.00004 130 7.13405 130 11V41C130 44.866 126.866 49 123 48C119.134 47 92.2599 42 66 48C39.7401 54 12.866 49 9 48C5.13401 47 2 44.866 2 41V11Z",
            },
            {
              duration: 0.25,
              morphSVG:
                "M2 11C2 7.13405 5.13401 5.00004 9 4.00004C12.866 3.00004 39.7401 -1.99996 66 4.00004C92.2599 10 119.134 5.00004 123 4.00004C126.866 3.00004 130 7.13405 130 11V41C130 44.866 126.866 47 123 48C119.134 49 92.2599 54 66 48C39.7401 42 12.866 47 9 48C5.13401 49 2 44.866 2 41V11Z",
            },
            {
              duration: 0.25,
              morphSVG:
                "M2 11C2 7.13401 5.13401 4 9 4C12.866 4 39.7401 4 66 4C92.2599 4 119.134 4 123 4C126.866 4 130 7.13401 130 11V41C130 44.866 126.866 48 123 48C119.134 48 92.2599 48 66 48C39.7401 48 12.866 48 9 48C5.13401 48 2 44.866 2 41V11Z",
            },
          ],
          onComplete: () => {
            to(successTick, {
              strokeDashoffset: "0px",
              duration: 0.2,
              onComplete: () => {
                to(successLetters, {
                  stagger: 0.075,
                  keyframes: [
                    {
                      scale: 1.1,
                      opacity: 1,
                      duration: 0.15,
                    },
                    {
                      scale: 1,
                      duration: 0.15,
                    },
                  ],
                  onComplete: () => {
                    to(button, {
                      keyframes: [
                        {
                          scale: 1.05,
                          duration: 0.15,
                        },
                        {
                          scale: 1,
                          duration: 0.1,
                          clearProps: true,
                        },
                      ],
                      onComplete: () => {
                        setTimeout(reset, 2000);
                      },
                    });
                  },
                });
              },
            });
          },
        });
      },
    });
  });
});
