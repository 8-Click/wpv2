<footer id="footer">
    <a class="footer-rose" href="#">
        <img src="<?= BASEURL_public ?>assets/img/branding/rose.png" alt="">
    </a>
    <div class="footer-container">
        <div class="footer-links">
            <ul class="footer-links-container">
                <li class="footer-link">
                    <a href="https://www.youtube.com/@Ado1024">
                        <img src="<?= BASEURL_public ?>assets/img/icons/youtube.png" alt="" class="footer-icon">
                        Ado's official YouTube channel
                    </a>
                </li>
                <li class="footer-link">
                    <a href="https://x.com/ado1024imokenp">
                        <img src="<?= BASEURL_public ?>assets/img/icons/twitter.png" alt="" class="footer-icon">
                        Ado's Twitter
                    </a>
                </li>
                <li class="footer-link">
                    <a href="#">
                        <img src="<?= BASEURL_public ?>assets/img/icons/twitter.png" alt="" class="footer-icon">
                        Ado Staff Twitter
                    </a>
                </li>
            </ul>
            <ul class="footer-links-container">
                <li class="footer-link">
                    <a href="https://www.facebook.com/ado1024.official/">
                        <img src="<?= BASEURL_public ?>assets/img/icons/facebook.png" alt="" class="footer-icon">
                        Ado Facebook
                    </a>
                </li>
                <li class="footer-link">
                    <a href="https://www.instagram.com/ado1024sweetpotet/">
                        <img src="<?= BASEURL_public ?>assets/img/icons/instagram.png" alt="" class="footer-icon">
                        Ado Instagram
                    </a>
                </li>
                <li class="footer-link">
                    <a href="#">
                        <img src="<?= BASEURL_public ?>assets/img/icons/instagram.png" alt="" class="footer-icon">
                        Ado Staff Instagram
                    </a>
                </li>
            </ul>
            <ul class="footer-links-container">
                <li class="footer-link">
                    <a href="https://discord.com/invite/ado1024">
                        <img src="<?= BASEURL_public ?>assets/img/icons/discord.png" alt="" class="footer-icon">
                        Ado Fan Discord
                    </a>
                </li>
                <li class="footer-link">
                    <a href="https://www.tiktok.com/@ado1024osenbei">
                        <img src="<?= BASEURL_public ?>assets/img/icons/tiktok.png" alt="" class="footer-icon">
                        Ado TikTok
                    </a>
                </li>
                <li class="footer-link">
                    <a href="https://ado-officialshop-friedpotato.com/">
                        <img src="<?= BASEURL_public ?>assets/img/icons/website.png" alt="" class="footer-icon">
                        Ado Official Webshop
                    </a>
                </li>
            </ul>
        </div>
        <hr class="horizontal-row" style="width: 90%; margin:1.5rem 0 1.5rem 0;">
        <div>
            <ul class="bottom-footer-links">
                <li class="footer-link">
                    <a href="#" onclick="event.preventDefault(); contactTheDev();">
                        <img src="<?= BASEURL_public ?>assets/img/icons/exclamation_mark.png" alt="Exclamation Mark">
                        <span>Contact the dev!</span>
                    </a>
                </li>

                <li class="footer-link">
                    <a href="">
                        <img src="<?= BASEURL_public ?>assets/img/icons/exclamation_mark.png" alt="Exclamation Mark">
                        <span>FAQ</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<script src="<?= BASEURL_public ?>assets/js/app.js"></script>
<?php if (isset($js)): ?>
    <?php foreach ($js as $script): ?>
        <script src="<?= BASEURL_public ?>assets/js/<?= $script ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>

</html>