@extends('Layouts.default')
@section('content')

<style>
    .accordion_digitalproducts {
        background-color: #f9f9f9;
        color: #333;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
    }

    .accordion.active, .accordion:hover {
        background-color: #ddd;
    }

    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    /* New style */
    .faq-heading {
        text-align: center;
    }
</style>

<!-- New h2 heading -->
<h2 class="faq-heading" style="margin-top: 40px;">Digital products - FAQ's</h2>

<div class="contactFormContainer container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <div id="accordion">
                <div class="accordion">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Advisor Questions
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>The Advisors program is a one-on-one system that allows you to ask questions to our astrologers and test their knowledge. We have some of the best minds in the world who are willing to work for a lot less than they could charge, but that’s simply because they want to use their abilities to help others no matter what. You can ask them anything from questions about love, money and destiny.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Astrology 101 – The Building Blocks of Astrology
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>Astrology reveals the magical correlation between you and the universe. The principle of astrology is that the smallest thing in the universe is subject to the same process as the largest – the same rules apply to both, and when you learn astrology, you learn these rules.
                                <br><br>
                                This is a 6-module course taught by Adrian Ross Duncan and designed especially for people who want to learn the basics of astrology. Adrian has practiced astrology full time for over 25 years and has a large worldwide clientele. He developed the World of Wisdom software range to make advanced astrology available to non-Advisors, and has had his own school for teaching astrologers how to help clients most effectively. He is a well-known author and lecturer who speaks at major astrology conferences every year, and now he has designed six simple hour-long courses for you.
                                <br><br>
                                These courses will take you through the building blocks of the horoscope – the planets, signs, houses and aspects as well as simple predictive techniques. At the end of the course series, you can start interpreting horoscopes for yourself and your friends. You will be able to identify strong and weak points in the character, learn how to optimize strengths and overcome weaknesses, and deal with challenges now and in the near future.
                                <br><br>
                                Each session is presented by Adrian in audio/video and illustrated via PowerPoint and video extracts using state of the art techniques.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Daily Influence Guide
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>The Daily Influence Guide offers an excellent analysis of day-by-day guidance that you can follow to reach your true destiny. Find out if it’s best to flirt tomorrow or reach out to old friends. Every step of the way gets you closer to your destined path in life.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Element Report
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>Your Element says a lot about you and your destiny. It tells a story about your personality and how you meant to develop in this world. It's important to know more about your element so you can benefit from the power of the stars. With your Element Guide you will be able to read into how your personality behaves with other signs and elements. Gain clarity on your destiny. Keep your Guide close with you so you can easily reference it when the time arises.</p>
                            <p>Your Sun sign and your star sign mean the same thing; the sign that the Sun was in when you were born. Elements are a bit different; there are four of them, and every sign belongs to one of the elements; no exceptions. The water element contains the signs of Cancer, Scorpio and Pisces. Gemini, Libra, and Aquarius belong to the air element, while Aries, Leo, and Sagittarius hang out over with fire. The earth signs of Taurus, Virgo, and Capricorn complete the zodiac. All of the signs in the same element are going to have similar traits and tendencies, and will probably be quite compatible with each other. A lot can be learned simply by studying the elements of astrology!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Essential Year Forecast
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>Astrology Answer’s extensive One Year Forecast contains extremely detailed and personalized information based on thousands of astrological calculations. Please be advised that your reading may reveal some shocking information; it is very important that you only proceed if you want to discover how the next year of your life will transpire.
                            <br><br>
                            Your One Year Forecast will contain all of the most important influences which will play out over your life for the next 12 months, both positive and negative. The One Year Forecast covers: Finances and Career, Love and Relationships, Progressions, Transits and Solar Returns, Zodiac Compatibility, Luck and Fortune, Timing of Events, Lucky Numbers and so very much more!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Free Reading
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>The Astrology Answers Free Reading is a one-of-a-kind personalized reading crafted from the detailed information you share with us. This comprehensive reading relies on your date of birth, location, and other distinct attributes that define you. Once created, it serves as a revealing glimpse into your individuality and provides insights into forthcoming life changes. Even better, we provide this valuable resource to you at no cost!
                            <br><br>
                            Want to see what's in store for you? Click here to find out!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Gemstone Healing Guide
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>With Your Essential Healing Wand Guide, you will get an in depth look at all you need to know in regard to using your Gemstone Healing Wand. Learn about the Green Aventurine crystals, simple and complex practices, Chakra, how to master it and much much more! All without having to dig through numerous online sites that are hard to trust.
                            <br><br>
                            <b>With this Powerful Guide, you'll be able to:
                            Introduction into the Art of Healing Power of Green Aventurine, Learn about your stone and crystals, How to use your new Gemstone Healing Wand Tips and tricks, Frequently Asked Questions (FAQ's), FREE Healing Audio And much much more...</b></p>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Healing and Strengthening Your Love Relationship
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>There may be no such thing as a perfect relationship, but there are certainly love relationships that are richly fulfilling and joyful most of the time. In this comprehensive Guidebook, you will gain both insight and practical tools for ensuring your most important relationships grow stronger, happier and able to stand the test of time!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <h2 class="accordion-header" id="headingnine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        Healthy Lifestyle: Steps to Discovering the Healthiest You
                        </button>
                    </h2>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>Living a healthy life doesn’t have to be difficult, and this book proves it! Find out how to make the most of your precious time and energy so that your health comes first. Simple, step-by-step guidance puts YOU in the driver’s seat to a healthier, happier life!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var accordions = document.querySelectorAll('.accordion');
    accordions.forEach(function (accordion) {
        accordion.addEventListener('click', function () {
            // Close all other open accordions
            accordions.forEach(function (otherAccordion) {
                if (otherAccordion !== accordion) {
                    otherAccordion.classList.remove('show');
                }
            });
        });
    });
</script>

@stop