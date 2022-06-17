function setTransactionType (transactionType) {
    switch(transactionType) {
        case 'deposit':
            // TODO: something
            break;
        case 'withdraw':
            // TODO: something
            break;
    }

    setActiveColor(transactionType);
}

function setActiveColor(transactionType) {
    cleanStyleTransactionTypeButtons();

    let buttonToActivate = document.getElementById(transactionType + '-button');

    let activeColor = buttonToActivate.attributes.activecolor.value;

    buttonToActivate.style.background = colors[activeColor];
}

function cleanStyleTransactionTypeButtons() {
    let transactionTypeButtons = document.querySelectorAll('button[class="transaction-type-button"]').values();

    for (let button of transactionTypeButtons) {
        button.style.background = 'transparent';
    }
}

const colors ={
    green: 'rgb(18, 164, 84, .2)',
    red: 'rgb(229, 46, 77, .2)'
}
