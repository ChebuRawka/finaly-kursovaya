document.addEventListener('DOMContentLoaded', () => {
    const loanAmountInput = document.getElementById('loan-amount');
    const loanAmountRange = document.getElementById('loan-amount-range');
    const loanTermInput = document.getElementById('loan-term');
    const loanTermRange = document.getElementById('loan-term-range');
    const creditTypeSelect = document.getElementById('credit-type');
    const scrollButton = document.getElementById('scroll-button');
    const scrolllButton = document.getElementById('scrolll-button');
    const consultationSection = document.getElementById('consultation');
    const creditSection = document.getElementById('credit');

    const creditOptions = {
        business: { minAmount: 5000000, maxAmount: 30000000, minTerm: 1, maxTerm: 10 },
        personal: { minAmount: 1000000, maxAmount: 5000000, minTerm: 1, maxTerm: 5 },
        mortgage: { minAmount: 2000000, maxAmount: 10000000, minTerm: 5, maxTerm: 20 }
    };

    function updateCreditLimits() {
        const selectedType = creditTypeSelect.value;
        const { minAmount, maxAmount, minTerm, maxTerm } = creditOptions[selectedType];

        loanAmountInput.min = minAmount;
        loanAmountInput.max = maxAmount;
        loanAmountRange.min = minAmount;
        loanAmountRange.max = maxAmount;

        loanTermInput.min = minTerm;
        loanTermInput.max = maxTerm;
        loanTermRange.min = minTerm;
        loanTermRange.max = maxTerm;

        // Adjust values if they fall outside the new limits
        if (loanAmountInput.value > maxAmount) {
            loanAmountInput.value = maxAmount;
            loanAmountRange.value = maxAmount;
        } else if (loanAmountInput.value < minAmount) {
            loanAmountInput.value = minAmount;
            loanAmountRange.value = minAmount;
        }

        if (loanTermInput.value > maxTerm) {
            loanTermInput.value = maxTerm;
            loanTermRange.value = maxTerm;
        } else if (loanTermInput.value < minTerm) {
            loanTermInput.value = minTerm;
            loanTermRange.value = minTerm;
        }
    }

    creditTypeSelect.addEventListener('change', updateCreditLimits);

    loanAmountInput.addEventListener('input', () => {
        loanAmountRange.value = loanAmountInput.value;
    });

    loanAmountRange.addEventListener('input', () => {
        loanAmountInput.value = loanAmountRange.value;
    });

    loanTermInput.addEventListener('input', () => {
        loanTermRange.value = loanTermInput.value;
    });

    loanTermRange.addEventListener('input', () => {
        loanTermInput.value = loanTermRange.value;
    });

    scrollButton.addEventListener('click', () => {
        consultationSection.scrollIntoView({ behavior: 'smooth' });
    });

    scrolllButton.addEventListener('click', () => {
        creditSection.scrollIntoView({ behavior: 'smooth' });
    });

    // Initialize credit limits based on the default selection
    updateCreditLimits();
});
