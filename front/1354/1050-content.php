<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="1050">
    <div class="container">
      <div class="form-section">
        <h2>SEND MESSAGE</h2>
        <hr class="short-line" />
        <p>
          If you are facing any problems with your Device and want us to fix it.
          Find us on social networks.
        </p>
        <div class="social-icons" data-style="effect_8">
          <div class="social-item-icon item-item-bind-shown" style="width:42px;height:42px;line-height:42px;font-size:18px;border-radius:500px;">
            <div class="item-socials-m-back item-socials-m-back-color" style="background: #f4f4f4;border-radius: 500px;"></div>
            <div class="item-socials-m-back item-socials-m-back-colorscheme" style="background:#3b5998; border-radius:500px;"></div>
        
            <i class="fa-brands fa-facebook-f item-socials-m-icon item-socials-m-icon-color"  style="color:#222222;"></i>
            <i class="fa-brands fa-facebook-f item-socials-m-icon item-socials-m-icon-hovercolor" style="color:#ffffff;"></i>
            <i class="fa-brands fa-facebook-f item-socials-m-icon item-socials-m-icon-colorscheme" style="color:#3b5998;"></i>
            <div class="item-hover item-top">
              <div style="background: #3b5998;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-top-left">
              <div style="background: #3b5998;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-top-right">
              <div style="background: #3b5998;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-bottom">
              <div style="background: #3b5998;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-bottom-left">
              <div style="background: #3b5998;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-bottom-right">
              <div style="background: #3b5998;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-center-right">
              <div style="background: #3b5998;" class="item-center-bg item-ani-3"></div>
            </div>
            <div class="item-hover item-center-left">
              <div style="background: #3b5998;" class="item-center-bg item-ani-4"></div>
            </div>
            <a href="#" target="_blank"></a>
          </div>

          <div class="social-item-icon" style="width:42px;height:42px;line-height:42px;font-size:18px;border-radius:500px;">
            <div class="item-socials-m-back item-socials-m-back-color" style="background: #f4f4f4;border-radius: 500px;"></div>
            <div class="item-socials-m-back item-socials-m-back-colorscheme" style="background:#125688; border-radius:500px;"></div>
        
            <i class=" item-socials-m-icon-color item-socials-m-icon fab fa-instagram" style="color:#222222;"></i>
            <i class=" item-socials-m-icon-hovercolor item-socials-m-icon fab fa-instagram" style="color:#ffffff;"></i>
            <i class=" item-socials-m-icon-colorscheme item-socials-m-icon fab fa-instagram" style="color:#3b5998;"></i>
            <div class="item-hover item-top">
              <div style="background: #125688;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-top-left">
              <div style="background: #125688;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-top-right">
              <div style="background: #125688;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-bottom">
              <div style="background: #125688;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-bottom-left">
              <div style="background: #125688;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-bottom-right">
              <div style="background: #125688;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-center-right">
              <div style="background: #125688;" class="item-bg item-ani-3"></div>
            </div>
            <div class="item-hover item-center-left">
              <div style="background: #125688;" class="item-bg item-ani-4"></div>
            </div>
            <a href="#" target="_blank"></a>
          </div>

          <div class="social-item-icon" style="width:42px;height:42px;line-height:42px;font-size:18px;border-radius:500px;">
            <div class="item-socials-m-back item-socials-m-back-color" style="background: #f4f4f4;border-radius: 500px;"></div>
            <div class="item-socials-m-back item-socials-m-back-colorscheme" style="background:#55acee; border-radius:500px;"></div>
        
            <i class="fab fa-twitter  item-socials-m-icon item-socials-m-icon-color"  style="color:#222222;"></i>
            <i class="fab fa-twitter  item-socials-m-icon item-socials-m-icon-hovercolor" style="color:#ffffff;"></i>
            <i class="fab fa-twitter  item-socials-m-icon item-socials-m-icon-colorscheme" style="color:#55acee;"></i>
            <div class="item-hover item-top">
              <div style="background: #55acee;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-top-left">
              <div style="background: #55acee;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-top-right">
              <div style="background: #55acee;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-bottom">
              <div style="background: #55acee;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-bottom-left">
              <div style="background: #55acee;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-bottom-right">
              <div style="background: #55acee;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-center-right">
              <div style="background: #55acee;" class="item-bg item-ani-3"></div>
            </div>
            <div class="item-hover item-center-left">
              <div style="background: #55acee;" class="item-bg item-ani-4"></div>
            </div>

            <a href="#" target="_blank"></a>
          </div>

          <div class="social-item-icon" style="width:42px;height:42px;line-height:42px;font-size:18px;border-radius:500px;">
            <div class="item-socials-m-back item-socials-m-back-color" style="background: #f4f4f4;border-radius: 500px;"></div>
            <div class="item-socials-m-back item-socials-m-back-colorscheme" style="background:#bb0000; border-radius:500px;"></div>
        
            <i class="fab fa-youtube  item-socials-m-icon item-socials-m-icon-color"  style="color:#222222;"></i>
            <i class="fab fa-youtube  item-socials-m-icon item-socials-m-icon-hovercolor" style="color:#ffffff;"></i>
            <i class="fab fa-youtube  item-socials-m-icon item-socials-m-icon-colorscheme" style="color:#bb0000;"></i>
            <div class="item-hover item-top">
              <div style="background: #bb0000;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-top-left">
              <div style="background: #bb0000;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-top-right">
              <div style="background: #bb0000;" class="item-bg item-ani-1"></div>
            </div>
            <div class="item-hover item-bottom">
              <div style="background: #bb0000;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-bottom-left">
              <div style="background: #bb0000;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-bottom-right">
              <div style="background: #bb0000;" class="item-bg item-ani-2"></div>
            </div>
            <div class="item-hover item-center-right">
              <div style="background: #bb0000;" class="item-bg item-ani-3"></div>
            </div>
            <div class="item-hover item-center-left">
              <div style="background: #bb0000;" class="item-bg item-ani-4"></div>
            </div>
            <a href="#" target="_blank"></a>
          </div>

        </div>
        <p>Or please Call us at ...</p>
        <div class="phone-number">
          <i class="fas fa-phone"></i> 1 625 457 9820
        </div>
      </div>
      <form class="contact-form">
        <input type="text" placeholder="Your Name" required />
        <input type="email" placeholder="Your Email" required />
        <input type="text" placeholder="Your Subject" required />
        <textarea placeholder="Your Message" required></textarea>
        <button type="submit">Send</button>
      </form>
    </div>
    </div>
    <script>
      const contactForm = document.querySelector(".contact-form");

      contactForm.addEventListener("click", () => {
        contactForm.classList.add("focused");
      });
    </script>