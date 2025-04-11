
// Обработка формы покупки токенов
function setAmount(amount) {
    document.getElementById('amount').value = amount;
    const paymentMethod = document.getElementById('paymentMethod').value;
    if (paymentMethod === "--") {
        /*alert('Метод оплаты не выбран');*/
        document.getElementById('cryptoAmount').textContent = `не выбран метод`;
        document.getElementById('cryptoAmount').classList.remove('neutral-1000');
        document.getElementById('cryptoAmount').classList.add('neutral-500');
    }
    document.getElementById('cryptoAmount').classList.remove('neutral-500');
    document.getElementById('cryptoAmount').classList.add('neutral-1000');
        updateAmount();
}

function updateAmount() {
    const paymentMethod = document.getElementById('paymentMethod').value;

        const amountInUsd = parseFloat(document.getElementById('amount').value) || 0;
        const rate = exchangeRates[paymentMethod] || 1;
        const amountInCrypto = amountInUsd / rate;
        document.getElementById('amount').value = amountInUsd.toFixed(0);
    if (paymentMethod === "--") {
        /*alert('Метод оплаты не выбран');*/
        document.getElementById('cryptoAmount').textContent = `не выбран метод`;
        document.getElementById('cryptoAmount').classList.remove('neutral-1000');
        document.getElementById('cryptoAmount').classList.add('neutral-500');
    }
    else {
        document.getElementById('cryptoAmount').textContent = `${amountInCrypto.toFixed(4)} ${paymentMethod.toUpperCase()}`;
        document.getElementById('cryptoAmount').classList.remove('neutral-500');
        document.getElementById('cryptoAmount').classList.add('neutral-1000');
        }
    calculateTokens();
}

function calculateTokens() {
    const amountInUsd = parseFloat(document.getElementById('amount').value) || 0;
    const pricePerToken = parseFloat(document.getElementById('currentPrice').textContent.replace('$', '')) || null;
    let bonusPercentage = 0;

    // Активируем бонус 10% при покупке от $1000
    if (amountInUsd >= 1000) {
        bonusPercentage = 10;
    }

    const baseTokens = Math.round(amountInUsd / pricePerToken);
    const bonusTokens = Math.round(baseTokens * (bonusPercentage / 100));
    const totalTokens = Math.round(baseTokens + bonusTokens);

    document.getElementById('tokenAmount').textContent = baseTokens + ' PFTG';

    if (bonusPercentage > 0) {
        document.getElementById('tokenBonus').textContent = `+${bonusTokens} PFTG (${bonusPercentage}%)`;
        document.getElementById('tokenBonus').classList.remove('neutral-500');
        document.getElementById('tokenBonus').classList.add('neutral-1000');
    } else {
        document.getElementById('tokenBonus').textContent = `-- (от 1000 USD)`;
        document.getElementById('tokenBonus').classList.remove('neutral-1000');
        document.getElementById('tokenBonus').classList.add('neutral-500');
    }
    document.getElementById('tokenTotal').textContent = totalTokens + ' PFTG';
    document.getElementById('tokenTotalHidden').value = totalTokens;
    document.getElementById('tokenBonusValue').value = bonusTokens;
    document.getElementById('tokenAmountValue').value = baseTokens;


}

function processPurchase() {


    const amountInUsd = parseFloat(document.getElementById('amount').value) || 0;
    const paymentMethod = document.getElementById('paymentMethod').value;
    const wallet = document.getElementById('wallet').value;
    const agreeTerms = document.getElementById('agreeTerms').checked;

    var toast = new bootstrap.Toast(document.getElementById('myToast'));

    // Проверка суммы инвестиции
    if (amountInUsd < 50) {
       document.getElementById('toastBody').textContent = `Минимальная сумма инвестиции $50 USD`;
        toast.show();
        return;
    }

    if (paymentMethod === "--") {

        document.getElementById('cryptoAmount').textContent = `не выбран метод`;
        document.getElementById('toastBody').textContent = `Необходимо выбрать метод оплаты`;
        toast.show();
        return;
    }

    if (!wallet) {
        document.getElementById('toastBody').textContent = `Пожалуйста, укажите адрес вашего TRX кошелька`;
        toast.show();
        return;
    }

    if (!agreeTerms) {
        document.getElementById('toastBody').textContent = `Необходимо принять условия продажи`;
        toast.show();
        return;
    }

    document.getElementById('tokenPurchaseForm').submit();

}

function closeModal() {
    document.getElementById('successModal').classList.add('hidden');
}
// Инициализация расчета токенов при загрузке
document.addEventListener('DOMContentLoaded', () => {
    calculateTokens();

    // Обновляем расчет при изменении суммы
    document.getElementById('amount').addEventListener('input', updateAmount);
});
