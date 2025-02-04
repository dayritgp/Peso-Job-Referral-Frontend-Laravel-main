function formatNumber(input) {
    // Remove non-digit characters
    let cleaned = input.value.replace(/\D/g, '');

    // Apply formatting
    let formatted = '';
    for (let i = 0; i < cleaned.length; i++) {
        if (i === 3 || i === 6) {
            formatted += '-';
        }
        formatted += cleaned[i];
    }

    // Update input value
    input.value = formatted;
}