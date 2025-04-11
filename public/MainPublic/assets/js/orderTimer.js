// Используем переданную дату
const startDate = new Date(createdAt); // Преобразуем строку в объект Date
// Время через 30 минут
const endDate = new Date(startDate.getTime() + 30 * 60 * 1000);

function updateTimer() {
    const now = new Date();
    const timeLeft = endDate - now;

    if (timeLeft <= 0) {
        document.getElementById('timer').textContent = "Время вышло!";
        clearInterval(interval);
        return;
    }

    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById('timer').textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
}

// Обновляем таймер каждую секунду
const interval = setInterval(updateTimer, 1000);
