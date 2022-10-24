<main id="contact" class="main-content">
    <div id="contact-details">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2615.2974763527845!2d2.080346016157962!3d49.042967179305826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f5161c247b97%3A0x534dfb9fc3b1f63a!2sESIEE-IT%2C%208%20Rue%20Pierre%20de%20Coubertin%2C%2095300%20Pontoise!5e0!3m2!1sfr!2sfr!4v1666025842329!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div id="contact-address">
            <i class="adjust fa-solid fa-location-dot"></i>
            <p>
                8 Rue Pierre de Coubertin<br>
                95300 Pontoise, France
            </p>
        </div>

        <div id="contact-phone">
            <i class="adjust fa-solid fa-phone"></i>
            <p>
                +33 0678267891
            </p>
        </div>

        <div id="contact-email">
            <i class="fa-solid fa-envelope"></i>
            <p>
                maeldewulf@gmail.com
            </p>
        </div>

        <div id="contact-social">
            <a href=""><i class="fa-brands fa-discord"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href=""><i class="fa-brands fa-github"></i></a>
        </div>
    </div>

    <form id="contact-form" method="post" action="contact">
        <h1>Laissez moi un message</h1>
        <input class="input" type="text" name="name" placeholder="Nom" required>
        <input class="input" type="email" name="email" placeholder="Mail" required>
        <textarea class="input" name="message" placeholder="Écrivez votre message ici" rows="12" minlength="20" required></textarea>
        <button class="btn-submit g-recaptcha" data-sitekey="<?=__RECAPTCHA_PUBLIC_KEY__?>" data-callback='onSubmit' data-action='submit'>Envoyer</button>
    </form>
</main>