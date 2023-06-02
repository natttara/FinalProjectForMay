<?php
    class Footer {
        static function footer(){
            $htmlFooter = '
            <footer>
                <section class="footerTop">
                    <article>
                        <aside>
                            <a href="#"><i class="fa-solid fa-bed"></i></a>
                            <!-- replace with logo after decision -->
                            <h2>Van Booking</h2>
                        </aside>
                        <blockquote>
                            <p>
                                Van Booking is a room booking website with hundreds of room owners in Vancouver. We would like to express our gratitude to those who use our services.
                            </p>
                        </blockquote>
                    </article>
                    <article>
                        <h3>Links</h3>
                        <ul>
                            <li><a href="../home/">Home</a></li>
                            <li><a href="#">Your Profile</a></li>
                            <li><a href="#">Form for owners</a></li>
                            <li><a href="#">Sign in</a></li>
                            <li><a href="#">Sign up</a></li>
                        </ul>
                    </article>
                    <article>
                        <h3>Contact</h3>
                        <ul>
                            <li>Address: 889 W Pender St #200, Vancouver, BC</li>
                            <li>Phone: (123)456-7890</li>
                            <li>Mail: VanBooking@gmail.com</li>
                        </ul>
                        <ol>
                            <li><i class="fa-brands fa-facebook-f"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-line"></i></li>
                            <li><i class="fa-brands fa-whatsapp"></i></i></li>
                        </ol>
                    </article>
                </section>
                <section class="footerBottom">
                    <i class="fa-regular fa-copyright"></i>
                    <p>2023 Van Booking, Inc.</p>
                </section>
            </footer>
            ';
            return $htmlFooter;
        }
    }