<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1066">
        <div class="container mt-5">
            <h2 class="text-center border-b mb-5">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Lorem Ipsum Dolor Sit Amet
                            <span class="icon-toggle">+</span> 
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates illum aspernatur odio similique voluptatibus itaque magni dicta quasi nesciunt. Possimus animi in, voluptatem facere sint aut quibusdam expedita. Voluptates, laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt aliquam cumque praesentium iusto delectus rem officia quas quos tempore quaerat laudantium incidunt minus, quae veniam itaque expedita voluptatum perspiciatis adipisci!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lorem Ipsum Dolor Sit Amet
                            <span class="icon-toggle">+</span> 
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates illum aspernatur odio similique voluptatibus itaque magni dicta quasi nesciunt. Possimus animi in, voluptatem facere sint aut quibusdam expedita. Voluptates, laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt aliquam cumque praesentium iusto delectus rem officia quas quos tempore quaerat laudantium incidunt minus, quae veniam itaque expedita voluptatum perspiciatis adipisci!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lorem Ipsum Dolor Sit Amet
                            <span class="icon-toggle">+</span> 
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates illum aspernatur odio similique voluptatibus itaque magni dicta quasi nesciunt. Possimus animi in, voluptatem facere sint aut quibusdam expedita. Voluptates, laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt aliquam cumque praesentium iusto delectus rem officia quas quos tempore quaerat laudantium incidunt minus, quae veniam itaque expedita voluptatum perspiciatis adipisci!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Lorem Ipsum Dolor Sit Amet
                            <span class="icon-toggle">+</span> 
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates illum aspernatur odio similique voluptatibus itaque magni dicta quasi nesciunt. Possimus animi in, voluptatem facere sint aut quibusdam expedita. Voluptates, laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt aliquam cumque praesentium iusto delectus rem officia quas quos tempore quaerat laudantium incidunt minus, quae veniam itaque expedita voluptatum perspiciatis adipisci!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Lorem Ipsum Dolor Sit Amet
                            <span class="icon-toggle">+</span> 
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates illum aspernatur odio similique voluptatibus itaque magni dicta quasi nesciunt. Possimus animi in, voluptatem facere sint aut quibusdam expedita. Voluptates, laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt aliquam cumque praesentium iusto delectus rem officia quas quos tempore quaerat laudantium incidunt minus, quae veniam itaque expedita voluptatum perspiciatis adipisci!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', () => {
            const iconToggle = button.querySelector('.icon-toggle');
            if (button.classList.contains('collapsed')) {
                iconToggle.textContent = '+'; 
            } else {
                iconToggle.textContent = '-'; 
            }
        });
    });
</script>