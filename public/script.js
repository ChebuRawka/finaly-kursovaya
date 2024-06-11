document.addEventListener('DOMContentLoaded', () => {
    const loanAmountInput = document.getElementById('loan-amount');
    const loanAmountRange = document.getElementById('loan-amount-range');
    const loanTermInput = document.getElementById('loan-term');
    const loanTermRange = document.getElementById('loan-term-range');
    const scrollButton = document.getElementById('scroll-button');
    const scrolllButton = document.getElementById('scrolll-button');
    const consultationSection = document.getElementById('consultation');
    const creditSection = document.getElementById('credit');

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
});
