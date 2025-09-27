// ====================== Изменение заголовка формы ======================== //

const contactButtons: NodeListOf<HTMLButtonElement> = document.querySelectorAll(".js-startproject");

const formTitle: HTMLHeadingElement | null = document.querySelector(".h1-inner");

const subjectInput: HTMLInputElement | null = document.querySelector('input[name="subject"]');

if (contactButtons.length > 0 && formTitle && subjectInput) {
  contactButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const buttonText = button.textContent?.trim();

      if (buttonText) {
        formTitle.textContent = buttonText;

        subjectInput.value = buttonText;
      }
    });
  });
} else {
  console.warn("Не удалось найти один или несколько элементов");
}
