<button id="customFloatingContactBtn" class="custom-floating-contact-btn_personalized" onclick="toggleContactForm()" style="padding: 1rem 1.5rem; font-size: 0.875rem;">Get Your Free Personalized Reading!</button>

<style>
    @media (max-width: 767px) {
        /* Styles for mobile */
        #customFloatingContactBtn {
            padding: 1rem 1.5rem; /* Adjust as needed */
            font-size: 0.875rem; /* Adjust as needed */
        }
    }
</style>

<div class="custom-floating-contact-form_personalized" id="contactForm">
    <span class="close-btn" onclick="toggleContactForm()">&times;</span>
    <h2 style="background: linear-gradient(to right, #FA7936, #9900EB); -webkit-background-clip: text; background-clip: text; color: transparent;">Get Your Free Personalized Reading!</h2>

    <div id="floatingWarrp">
        <p id="floatingError" class="text-danger"></p>
        <!-- Laravel Form -->
        <form method="post" id="floatingForm">
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="birthdate">Date of Birth</label>
            <input type="date" name="birthdate" id="birthdate" required>

            <label for="birth_year">What year were you born?</label>
            <input type="number" name="birth_year" id="birth_year" required>

            <label for="birth_time_know">Birth time (Do you know what time you were born?)</label>
            <select name="birth_time_know" id="birth_time_know" required>
                <option value="yes">Yes</option>
                <option value="no" selected>No</option> <!-- Set "No" as the default value -->
            </select>

            <div id="birth_time_input" style="display: none;"> <!-- Hide this input by default -->
                <label for="birth_time">Enter your birth time</label>
                <input type="text" name="birth_time" id="birth_time">
            </div>

            <button type="submit" id="floatingFormBtn">Submit</button>
        </form>
    </div>
    <div id="floatingFormRes" class="d-none"></div>
</div>

<script>
    function toggleContactForm() {
        var contactForm = document.getElementById('contactForm');
        contactForm.style.display = (contactForm.style.display === 'none' || contactForm.style.display === '') ? 'block' : 'none';
    }

    document.getElementById('birth_time_know').addEventListener('change', function() {
        var birthTimeInput = document.getElementById('birth_time_input');
        birthTimeInput.style.display = (this.value === 'yes') ? 'block' : 'none';
    });
</script>

<script>
    // Function to toggle the visibility of the floating contact form
    function toggleFloatingContactForm() {
        var floatingContactForm = document.getElementById('floatingContactForm');
        floatingContactForm.style.display = (floatingContactForm.style.display === 'none' || floatingContactForm.style.display === '') ? 'block' : 'none';
    }

    // Attach the toggle function to the button click event
    document.getElementById('toggleContactFormButton').addEventListener('click', toggleFloatingContactForm);
</script>

<script>
    // Function to toggle the visibility of the floating contact form
    function toggleFloatingContactForm() {
        var floatingContactForm = document.getElementById('floatingContactForm');
        floatingContactForm.style.display = (floatingContactForm.style.display === 'none' || floatingContactForm.style.display === '') ? 'block' : 'none';
    }

    // Attach the toggle function to the button click event
    document.getElementById('customFloatingContactBtn').addEventListener('click', toggleContactForm);
</script>