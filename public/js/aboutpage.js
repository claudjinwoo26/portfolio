
// Function for when they hover to the biography box a text appears containing more information
var biographyBox = document.querySelector('.biography-box');
var hiddenBiography = biographyBox.querySelector('.hidden-biography');
var displayedBiography = document.querySelector('.displayed-biography');

biographyBox.addEventListener('mouseover', function () {
    setTimeout(function () {
        hiddenBiography.style.display = 'block';
        hiddenBiography.style.opacity = '1';
        displayedBiography.style.display = 'none';
    }, 500); // Delay the transition by 500 milliseconds (0.5 seconds)
});

biographyBox.addEventListener('mouseout', function () {
    setTimeout(function () {
        hiddenBiography.style.display = 'none';
        displayedBiography.style.display = 'block';
    }, 500); // Delay the transition by 500 milliseconds (0.5 seconds)
});


// Function for when they hover to the education box a text appears containing more information
var educationBox = document.querySelector('.education-box');
var hiddenEducation = educationBox.querySelector('.hidden-education');
var displayedEducation = document.querySelector('.displayed-education');

educationBox.addEventListener('mouseover', function () {
    setTimeout(function () {
        hiddenEducation.style.display = 'block';
        displayedEducation.style.display = 'none';
    }, 500); // Delay the transition by 500 milliseconds (0.5 seconds)
});

educationBox.addEventListener('mouseout', function () {
    setTimeout(function () {
        hiddenEducation.style.display = 'none';
        displayedEducation.style.display = 'block';
    }, 500); // Delay the transition by 500 milliseconds (0.5 seconds)
});

// Function for when they hover to the skill box a text appears containing more information
var skillBox = document.querySelector('.skill-box');
var hiddenSkill = skillBox.querySelector('.hidden-skill');
var displayedSkill = document.querySelector('.displayed-skill');

skillBox.addEventListener('mouseover', function () {
    setTimeout(function () {
        hiddenSkill.style.display = 'block';
        displayedSkill.style.display = 'none';
    }, 500); // Delay the transition by 500 milliseconds (0.5 seconds)
});

skillBox.addEventListener('mouseout', function () {
    setTimeout(function () {
        hiddenSkill.style.display = 'none';
        displayedSkill.style.display = 'block';
    }, 500); // Delay the transition by 500 milliseconds (0.5 seconds)
});



