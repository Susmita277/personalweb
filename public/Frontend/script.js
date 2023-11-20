let currentYear = new Date().getFullYear();
let copyright = document.getElementById('copyright');
copyright.innerHTML = "&copy; " + currentYear + " | all right reserved";


// toggling in description section
let descriptions = document.querySelectorAll('.descriptions .description');
let descriptionsLinks = document.querySelectorAll('.description-links li');
descriptions.forEach((description, index) => {
    if (index != 0) {
        description.classList.add('hidden');
    }
})
descriptionsLinks.forEach((link, index) => {
    link.addEventListener('click', () => {
        // Hide all descriptions
        descriptions.forEach((description) => {
            description.classList.add('hidden');
        });

        // Display the selected description
        descriptions[index].classList.remove('hidden');
    });

});
