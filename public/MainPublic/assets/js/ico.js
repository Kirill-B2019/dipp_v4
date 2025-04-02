let exchangeRates = {
    btc: 0,
    eth: 0,
    usdt_erc20: 0,
    usdt_trc20: 0,
    trx: 0.22
};

// Обработка формы покупки токенов
function setAmount(amount) {
    document.getElementById('amount').value = amount;
    updateAmount();
}

function updateAmount() {
    const paymentMethod = document.getElementById('paymentMethod').value;
    const amountInUsd = parseFloat(document.getElementById('amount').value) || 0;
    const rate = exchangeRates[paymentMethod] || 1;
    const amountInCrypto = amountInUsd / rate;
    document.getElementById('amount').value = amountInUsd.toFixed(2);
    document.getElementById('cryptoAmount').textContent = `${amountInCrypto.toFixed(8)} ${paymentMethod.toUpperCase()}`;
    calculateTokens();
}

function calculateTokens() {
    const amountInUsd = parseFloat(document.getElementById('amount').value) || 0;
    const pricePerToken = parseFloat(document.getElementById('currentPrice').textContent.replace('$', '')) || 0.4;
    let bonusPercentage = 0;

    // Активируем бонус 10% при покупке от $1000
    if (amountInUsd >= 1000) {
        bonusPercentage = 10;
        document.getElementById('bonusBadge').classList.remove('hidden');
        document.getElementById('bonusBadge').classList.remove('bg-gray-100', 'text-gray-800');
        document.getElementById('bonusBadge').classList.add('bg-green-100', 'text-green-800');
    } else {
        document.getElementById('bonusBadge').classList.add('hidden');
    }

    const baseTokens = amountInUsd / pricePerToken;
    const bonusTokens = baseTokens * (bonusPercentage / 100);
    const totalTokens = baseTokens + bonusTokens;

    document.getElementById('tokenAmount').textContent = Math.round(baseTokens) + ' PFTG';

    if (bonusPercentage > 0) {
        document.getElementById('tokenBonus').textContent = `+${Math.round(bonusTokens)} PFTG (${bonusPercentage}%)`;
        document.getElementById('tokenBonus').classList.remove('text-gray-600');
        document.getElementById('tokenBonus').classList.add('text-green-600');
    } else {
        document.getElementById('tokenBonus').textContent = `+0 PFTG (0%)`;
        document.getElementById('tokenBonus').classList.remove('text-green-600');
        document.getElementById('tokenBonus').classList.add('text-gray-600');
    }

    document.getElementById('tokenTotal').textContent = Math.round(totalTokens) + ' PFTG';
}

function processPurchase() {
    const amountInUsd = parseFloat(document.getElementById('amount').value) || 0;
    const wallet = document.getElementById('wallet').value;
    const agreeTerms = document.getElementById('agreeTerms').checked;

    if (amountInUsd < 100) {
        alert('Минимальная сумма инвестиции $100');
        return;
    }

    if (!wallet) {
        alert('Пожалуйста, укажите адрес вашего кошелька');
        return;
    }

    if (!agreeTerms) {
        alert('Пожалуйста, согласитесь с условиями продажи');
        return;
    }

    // Для демонстрации просто показываем модальное окно
    document.getElementById('modalTokenAmount').textContent = document.getElementById('tokenTotal').textContent;
    document.getElementById('modalAmount').textContent = `$${amountInUsd.toFixed(2)}`;

    document.getElementById('successModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('successModal').classList.add('hidden');
}

// Получение данных о токенах из проекта
async function fetchTokenData() {
    try {
        const response = await fetch('https://projects-fund.com/tg-ask');
        const data = await response.json();
        if (data && data.lastRate !== undefined && data.outSum !== undefined && data.holders !== undefined) {
            const currentPrice = parseFloat(data.lastRate);
            const tokensSold = parseFloat(data.outSum.replace(/\s/g, ''));
            const holdersCount = parseInt(data.holders);

            document.getElementById('currentPrice').textContent = `$${currentPrice.toFixed(2)}`;
            document.getElementById('tokensSold').textContent = `${tokensSold.toLocaleString()} PFTG`;
            document.getElementById('holdersCount').textContent = holdersCount.toLocaleString();

            // Предположим, что общее количество токенов фиксировано, например, 10,000,000
            const totalTokens = 10000000;
            const tokensRemaining = totalTokens - tokensSold;
            document.getElementById('tokensRemaining').textContent = `${tokensRemaining.toLocaleString()} PFTG`;

            // Обновление прогресс бара SoftCap
            const softCapGoal = 350000;
            const currentRaised = tokensSold * currentPrice;
            const progressPercentage = (currentRaised / softCapGoal) * 100;
            document.getElementById('progressBarFill').style.width = `${progressPercentage.toFixed(2)}%`;
        }
    } catch (error) {
        console.error('Ошибка при загрузке данных о токене:', error);
        document.getElementById('currentPrice').textContent = '$0.40';
        document.getElementById('tokensSold').textContent = 'Ошибка загрузки';
        document.getElementById('tokensRemaining').textContent = 'Ошибка загрузки';
        document.getElementById('holdersCount').textContent = 'Ошибка загрузки';
    }
}

// Получение курсов криптовалют
async function fetchExchangeRates() {
    try {
        const btcResponse = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
        const btcData = await btcResponse.json();
        exchangeRates.btc = btcData.bitcoin.usd;

        const ethResponse = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=usd');
        const ethData = await ethResponse.json();
        exchangeRates.eth = ethData.ethereum.usd;

        const usdtResponse = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=tether&vs_currencies=usd');
        const usdtData = await usdtResponse.json();
        exchangeRates.usdt_erc20 = usdtData.tether.usd;
        exchangeRates.usdt_trc20 = usdtData.tether.usd;

        // Устанавливаем начальную сумму в USD
        document.getElementById('amount').value = 100;
        updateAmount();
    } catch (error) {
        console.error('Ошибка при загрузке курсов криптовалют:', error);
    }
}

// Инициализация расчета токенов при загрузке
document.addEventListener('DOMContentLoaded', () => {
    calculateTokens();
    fetchTokenData();
    fetchExchangeRates();

    // Обновляем расчет при изменении суммы
    document.getElementById('amount').addEventListener('input', updateAmount);
});
