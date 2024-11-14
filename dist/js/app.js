const cv = document.getElementById('cv');
const toggleContainer = document.getElementById('toggleContainer');
    const toggleIcon = document.getElementById('toggleIcon');
    const body = document.body;
    let isDarkMode = false;

    toggleContainer.addEventListener('click', () => {
      isDarkMode = !isDarkMode;
      body.classList.toggle('dark-mode', isDarkMode);
      toggleContainer.classList.toggle('dark', isDarkMode);
      toggleIcon.classList.toggle('move-right', isDarkMode);
      toggleIcon.classList.toggle('fa-sun', isDarkMode);
      toggleIcon.classList.toggle('fa-moon', !isDarkMode);
      toggleIcon.classList.toggle('sun', isDarkMode);
      toggleIcon.classList.toggle('moon', !isDarkMode);
    });
const viewCvFunktion = () =>cv.classList.toggle('hidden')
