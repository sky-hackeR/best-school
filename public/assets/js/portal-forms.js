/**
 * Portal Forms - Multi-step Logic
 */

document.addEventListener("DOMContentLoaded", function () {
    const multiStepForm = document.getElementById('multiStepForm');
    if (!multiStepForm) return;

    let currentStep = 0;
    const steps = document.querySelectorAll('.form-step');
    const totalSteps = steps.length;
    const dots = document.querySelectorAll('.step-dot');

    function showStep(n) {
        steps.forEach((s, i) => s.classList.toggle('active', i === n));

        // Dots
        dots.forEach((d, i) => {
            d.classList.remove('active', 'done');
            if (i === n) d.classList.add('active');
            else if (i < n) d.classList.add('done');
        });

        // Progress
        const pct = Math.round(((n + 1) / totalSteps) * 100);
        const progressFill = document.getElementById('progressFill');
        const currentStepNum = document.getElementById('currentStepNum');

        if (progressFill) progressFill.style.width = pct + '%';
        if (currentStepNum) currentStepNum.textContent = n + 1;

        // Buttons
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');

        if (prevBtn) prevBtn.style.display = n === 0 ? 'none' : 'inline-flex';
        if (nextBtn) nextBtn.style.display = n === totalSteps - 1 ? 'none' : 'inline-flex';
        if (submitBtn) submitBtn.style.display = n === totalSteps - 1 ? 'inline-flex' : 'none';
    }

    window.navigate = function (dir) {
        const next = currentStep + dir;
        if (next < 0 || next >= totalSteps) return;
        currentStep = next;
        showStep(currentStep);
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    // Allow clicking dots to go back
    window.goToStep = function (n) {
        if (n < currentStep) {
            currentStep = n;
            showStep(currentStep);
        }
    };

    // Confirmation removed at user request

    showStep(0);
});
