// サンタとトナカイ
const santaCanvas = document.getElementById('santa');
const santaCtx = santaCanvas.getContext('2d');
const santaImg = new Image();
santaImg.src = 'christmas_dance_santa.png';

const tonakaiCanvas = document.getElementById('tonakai');
const tonakaiCtx = tonakaiCanvas.getContext('2d');
const tonakaiImg = new Image();
tonakaiImg.src = 'christmas_dance_tonakai.png';


// サンタとトナカイの座標・移動速度
let santaX = 0, santaDirection = 1;
let tonakaiX = 0, tonakaiDirection = -1;


// アニメーション
function animateCharacters(){
    //サンタ
    santaCtx.clearRect(0, 0, santaCanvas.width, santaCanvas.height);
    santaCtx.drawImage(santaImg, santaX, 0, 100, 100);
    santaX += 2 * santaDirection;
    if (santaX > 300 || santaX < 0) santaDirection *= -1;

    //トナカイ
    tonakaiCtx.clearRect(0, 0, tonakaiCanvas.width, tonakaiCanvas.height);
    tonakaiCtx.drawImage(tonakaiImg, tonakaiX, 0, 100, 100);
    tonakaiX += 2 * tonakaiDirection;
    if (tonakaiX > 300 || tonakaiX < 0) tonakaiDirection *= -1;

    requestAnimationFrame(animateCharacters);
}

santaImg.onload = tonakaiImg.onload = animateCharacters;


//タイマー
const targetDate = new Date('2025-12-25T00:00:00');

function updateTimer() {
    const now = new Date();
    const timeLeft = targetDate - now;

    //0になったとき
    if (timeLeft <= 0) {
        document.getElementById('timer').textContent = 'Merry Christmas!';
        clearInterval(timerInterval);
        return;
    }

    //タイマーの計算
    const hours = Math.floor(timeLeft / (1000 * 60 * 60));
    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById('timer').textContent =
    `${String(hours).padStart(2,'0')}:${String(minutes).padStart(2,'0')}:${String(seconds).padStart(2,'0')}`;
}

const timerInterval = setInterval(updateTimer, 1000);