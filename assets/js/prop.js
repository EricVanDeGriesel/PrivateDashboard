const propContainer = document.createElement('div');

propContainer.id = 'propContainer';

document.body.appendChild(propContainer);

function propRain() {
    const prop = document.createElement('div');
    const img = document.createElement('img');

    prop.classList.add('prop');
    prop.style.left = Math.random() * 100 + 'vw';
    prop.style.transform = 'rotate(' + getRandomInt(-50, 50)  + 'deg)';
    prop.style.animationDuration = Math.random() * 3 + 8 + 's';
    img.width = Math.random() * 25 + 10;
    img.src = './assets/img/dollar.svg';

    prop.appendChild(img);
    document.getElementById('propContainer').appendChild(prop);

    setTimeout(function() {
        prop.remove();
    }, 10000);
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
  }

setInterval(propRain, Math.random() * 500 + 150);