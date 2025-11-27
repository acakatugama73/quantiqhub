<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuantiQ Hub Pizzeria - Authentic Italian Pizza in Your Neighborhood</title>
    <meta name="description" content="QuantiQ Hub Pizzeria serves fresh, handcrafted Italian pizzas made with traditional recipes and finest ingredients. Family-owned since 1987, we offer dine-in, takeout, and delivery services. Click here to continue exploring our authentic pizza experience and discover why locals choose us for the best pizza in town.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
            background-color: #fdf6e3;
        }

        .header-container-qh847 {
            background: linear-gradient(135deg, #d35400, #e67e22);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-px92k {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-section-mz34t {
            font-size: 2.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .navigation-menu-rt67w {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-bx89q {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .nav-link-bx89q:hover {
            background-color: rgba(255,255,255,0.2);
            color: #fff;
        }

        .hero-section-kl45n {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content-vy78m {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-zx12p {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.5);
        }

        .hero-subtitle-qw56r {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-nm89t {
            background-color: #e74c3c;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        .cta-button-nm89t:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .content-section-df34g {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-block-hj67k {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
        }

        .section-title-lm23x {
            font-size: 2.5rem;
            color: #d35400;
            margin-bottom: 1.5rem;
            text-align: center;
            position: relative;
        }

        .section-title-lm23x::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background-color: #e67e22;
            margin: 1rem auto;
        }

        .text-content-wp45y {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #34495e;
            text-align: justify;
        }

        .history-timeline-bv78n {
            background: linear-gradient(45deg, #ecf0f1, #bdc3c7);
            padding: 3rem;
            border-radius: 20px;
            margin: 3rem 0;
        }

        .timeline-item-cx56m {
            display: flex;
            margin-bottom: 2rem;
            align-items: center;
        }

        .timeline-year-qz89p {
            background-color: #e74c3c;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
            margin-right: 2rem;
        }

        .timeline-content-rt34k {
            flex: 1;
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .specialty-grid-mn67t {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .specialty-card-lx45q {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .specialty-card-lx45q:hover {
            transform: translateY(-5px);
        }

        .card-image-zy78w {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content-bm34r {
            padding: 1.5rem;
        }

        .card-title-nx89k {
            font-size: 1.4rem;
            color: #d35400;
            margin-bottom: 1rem;
        }

        .reviews-section-pq56t {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
        }

        .review-grid-vw23m {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .review-card-jk78n {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .review-text-ql45p {
            font-style: italic;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .reviewer-name-xz67r {
            font-weight: bold;
            color: #f39c12;
        }

        .ingredients-showcase-mt89k {
            background: url('https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg') center/cover;
            background-attachment: fixed;
            padding: 4rem 2rem;
            position: relative;
        }

        .ingredients-overlay-bh34t {
            background: rgba(0,0,0,0.7);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .ingredients-content-ry56w {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            color: white;
        }

        .process-section-kx78m {
            background: #ecf0f1;
            padding: 4rem 2rem;
            margin: 3rem 0;
        }

        .process-steps-nq45r {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }

        .process-step-tz89p {
            text-align: center;
            max-width: 200px;
            margin: 1rem;
        }

        .step-number-wv34k {
            background-color: #e74c3c;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .community-section-lm67t {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin: 3rem 0;
        }

        .awards-gallery-px45n {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 2rem 0;
        }

        .award-item-qr78k {
            text-align: center;
            margin: 1rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
            min-width: 150px;
        }

        .footer-section-zy56m {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content-bx89t {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-block-nw34r {
            margin-bottom: 2rem;
        }

        .footer-title-kj67p {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #f39c12;
        }

        .contact-link-mx45t {
            color: #3498db;
            text-decoration: none;
        }

        .contact-link-mx45t:hover {
            color: #2980b9;
        }

        .modal-overlay-qv78n {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 1000;
        }

        .modal-content-rl34k {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .close-button-zt89m {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }

        .continue-link-bm56p {
            background: linear-gradient(45deg, #27ae60, #2ecc71);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .continue-link-bm56p:hover {
            background: linear-gradient(45deg, #229954, #27ae60);
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .navigation-menu-rt67w {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-zx12p {
                font-size: 2.5rem;
            }
            
            .timeline-item-cx56m {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-qz89p {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="header-container-qh847">
        <nav class="nav-wrapper-px92k">
            <div class="logo-section-mz34t">QuantiQ Hub Pizzeria</div>
            <ul class="navigation-menu-rt67w">
                <li><a href="#about-section" class="nav-link-bx89q">About Us</a></li>
                <li><a href="#history-section" class="nav-link-bx89q">Our Story</a></li>
                <li><a href="#specialties-section" class="nav-link-bx89q">Specialties</a></li>
                <li><a href="#ingredients-section" class="nav-link-bx89q">Fresh Ingredients</a></li>
                <li><a href="#process-section" class="nav-link-bx89q">Our Process</a></li>
                <li><a href="#community-section" class="nav-link-bx89q">Community</a></li>
                <li><a href="#reviews-section" class="nav-link-bx89q">Reviews</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-section-kl45n">
        <div class="hero-content-vy78m">
            <h1 class="hero-title-zx12p">Authentic Italian Pizza</h1>
            <p class="hero-subtitle-qw56r">Handcrafted with love, served with passion since 1987</p>
            <a href="#about-section" class="cta-button-nm89t">Discover Our Story</a>
        </div>
    </section>

    <main class="content-section-df34g">
        <section id="about-section" class="about-block-hj67k">
            <h2 class="section-title-lm23x">Welcome to QuantiQ Hub Pizzeria</h2>
            <div class="text-content-wp45y">
                <p>At QuantiQ Hub Pizzeria, we believe that great pizza starts with great ingredients and traditional techniques passed down through generations. Our family-owned establishment has been serving the community for over three decades, creating memorable dining experiences one slice at a time.</p>
                
                <p>Every pizza that leaves our kitchen is a testament to our commitment to quality and authenticity. We use only the freshest ingredients, from our signature tomato sauce made daily to our hand-stretched dough that rises for 24 hours. <a href="#specialties-section" class="continue-link-bm56p">Click here to continue</a> exploring our culinary journey and discover what makes our pizzas truly special.</p>
                
                <p>Our wood-fired oven, imported directly from Naples, Italy, reaches temperatures of over 900 degrees Fahrenheit, giving our pizzas that perfect crispy crust with a tender, chewy interior that pizza enthusiasts crave. Whether you're joining us for a casual family dinner or celebrating a special occasion, we're dedicated to providing an exceptional dining experience.</p>
            </div>
        </section>

        <section id="history-section" class="history-timeline-bv78n">
            <h2 class="section-title-lm23x">Our Rich History</h2>
            <div class="timeline-item-cx56m">
                <div class="timeline-year-qz89p">1987</div>
                <div class="timeline-content-rt34k">
                    <h3>The Beginning</h3>
                    <p>Giuseppe and Maria Rossi opened the first QuantiQ Hub Pizzeria location with just four tables and a dream to bring authentic Italian flavors to the neighborhood. Starting with traditional family recipes from their hometown in Sicily, they began what would become a beloved local institution.</p>
                </div>
            </div>
            
            <div class="timeline-item-cx56m">
                <div class="timeline-year-qz89p">1995</div>
                <div class="timeline-content-rt34k">
                    <h3>Expansion and Recognition</h3>
                    <p>After eight successful years, we expanded our dining room and added our signature wood-fired oven. This year also marked our first local food award for "Best Pizza in the City," an honor we've maintained for over two decades.</p>
                </div>
            </div>
            
            <div class="timeline-item-cx56m">
                <div class="timeline-year-qz89p">2003</div>
                <div class="timeline-content-rt34k">
                    <h3>Second Generation</h3>
                    <p>The Rossi children, Antonio and Isabella, joined the family business, bringing fresh ideas while maintaining the traditional values and recipes that made us famous. They introduced our popular catering services and expanded our vegetarian options.</p>
                </div>
            </div>
            
            <div class="timeline-item-cx56m">
                <div class="timeline-year-qz89p">2018</div>
                <div class="timeline-content-rt34k">
                    <h3>Modern Touches</h3>
                    <p>We renovated our dining space while preserving the warm, family atmosphere our customers love. Added online ordering and delivery services to better serve our community, especially during challenging times.</p>
                </div>
            </div>
        </section>

        <section id="specialties-section" class="specialty-grid-mn67t">
            <div class="specialty-card-lx45q">
                <img src="https://images.pexels.com/photos/825661/pexels-photo-825661.jpeg" alt="Margherita Pizza" class="card-image-zy78w">
                <div class="card-content-bm34r">
                    <h3 class="card-title-nx89k">Classic Margherita</h3>
                    <p>Our signature pizza featuring San Marzano tomatoes, fresh mozzarella di bufala, and aromatic basil leaves. This timeless combination represents the colors of the Italian flag and showcases the purity of simple, quality ingredients.</p>
                </div>
            </div>
            
            <div class="specialty-card-lx45q">
                <img src="https://images.pexels.com/photos/708587/pexels-photo-708587.jpeg" alt="Quattro Stagioni Pizza" class="card-image-zy78w">
                <div class="card-content-bm34r">
                    <h3 class="card-title-nx89k">Quattro Stagioni</h3>
                    <p>Representing the four seasons, this masterpiece features artichokes, mushrooms, ham, and olives on separate quarters. Each section tells a story of seasonal flavors, creating a complete culinary journey in every bite.</p>
                </div>
            </div>
            
            <div class="specialty-card-lx45q">
                <img src="https://images.pexels.com/photos/2147491/pexels-photo-2147491.jpeg" alt="Prosciutto e Funghi Pizza" class="card-image-zy78w">
                <div class="card-content-bm34r">
                    <h3 class="card-title-nx89k">Prosciutto e Funghi</h3>
                    <p>Delicate prosciutto di Parma paired with fresh mushrooms and creamy mozzarella. This elegant combination balances the saltiness of cured meat with the earthy flavors of carefully selected fungi.</p>
                </div>
            </div>
        </section>

        <section id="reviews-section" class="reviews-section-pq56t">
            <h2 class="section-title-lm23x" style="color: white;">What Our Customers Say</h2>
            <div class="review-grid-vw23m">
                <div class="review-card-jk78n">
                    <p class="review-text-ql45p">"I've been coming to QuantiQ Hub for fifteen years, and they never disappoint. The consistency in quality and the warm family atmosphere keep me coming back. Their Margherita pizza is absolutely perfect!"</p>
                    <p class="reviewer-name-xz67r">- Sarah Mitchell, Local Food Blogger</p>
                </div>
                
                <div class="review-card-jk78n">
                    <p class="review-text-ql45p">"As someone who lived in Italy for three years, I can confidently say this is the most authentic Italian pizza outside of Italy. The wood-fired oven makes all the difference, and you can taste the quality in every bite."</p>
                    <p class="reviewer-name-xz67r">- Michael Rodriguez, Travel Writer</p>
                </div>
                
                <div class="review-card-jk78n">
                    <p class="review-text-ql45p">"QuantiQ Hub has been our family's go-to place for celebrations for over a decade. The staff treats us like family, and the food is consistently outstanding. My kids have grown up eating here!"</p>
                    <p class="reviewer-name-xz67r">- Jennifer Thompson, Regular Customer</p>
                </div>
                
                <div class="review-card-jk78n">
                    <p class="review-text-ql45p">"The attention to detail is remarkable. From the hand-stretched dough to the imported ingredients, everything shows their commitment to authenticity. This place is a true neighborhood gem."</p>
                    <p class="reviewer-name-xz67r">- David Chen, Food Critic</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#ingredients-section" class="continue-link-bm56p">Click here to continue</a> and learn about our fresh ingredients
            </div>
        </section>

        <section id="ingredients-section" class="ingredients-showcase-mt89k">
            <div class="ingredients-overlay-bh34t"></div>
            <div class="ingredients-content-ry56w">
                <h2 class="section-title-lm23x" style="color: white;">Fresh, Quality Ingredients</h2>
                <p style="font-size: 1.2rem; margin-bottom: 2rem;">We source our ingredients from trusted suppliers who share our commitment to quality and sustainability. Our tomatoes come from the volcanic soil of Mount Vesuvius, our mozzarella is made fresh daily by local artisans, and our flour is milled from carefully selected Italian wheat.</p>
                
                <p style="font-size: 1.1rem; margin-bottom: 2rem;">Every morning, our chefs prepare fresh basil oil, slice vegetables by hand, and check each ingredient for perfect ripeness and flavor. We believe that great pizza starts with great ingredients, and we never compromise on quality.</p>
                
                <p style="font-size: 1.1rem;">Our olive oil is cold-pressed from centuries-old groves in Tuscany, our herbs are grown in our own garden behind the restaurant, and our cheeses are aged to perfection by master craftsmen who have been perfecting their art for generations.</p>
            </div>
        </section>

        <section id="process-section" class="process-section-kx78m">
            <h2 class="section-title-lm23x">Our Pizza-Making Process</h2>
            <div class="process-steps-nq45r">
                <div class="process-step-tz89p">
                    <div class="step-number-wv34k">1</div>
                    <h3>Dough Preparation</h3>
                    <p>Our dough is made fresh daily using a 24-hour fermentation process that develops complex flavors and the perfect texture.</p>
                </div>
                
                <div class="process-step-tz89p">
                    <div class="step-number-wv34k">2</div>
                    <h3>Hand Stretching</h3>
                    <p>Each pizza base is carefully hand-stretched by our experienced pizzaiolos, ensuring the perfect thickness and texture.</p>
                </div>
                
                <div class="process-step-tz89p">
                    <div class="step-number-wv34k">3</div>
                    <h3>Fresh Toppings</h3>
                    <p>We add our signature sauce and carefully selected toppings, balancing flavors and ensuring even distribution.</p>
                </div>
                
                <div class="process-step-tz89p">
                    <div class="step-number-wv34k">4</div>
                    <h3>Wood-Fired Perfection</h3>
                    <p>Our authentic Neapolitan oven cooks each pizza at 900°F for just 90 seconds, creating the perfect crispy yet tender crust.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#community-section" class="continue-link-bm56p">Click here to continue</a> and discover our community involvement
            </div>
        </section>

        <section id="community-section" class="community-section-lm67t">
            <h2 class="section-title-lm23x">Part of the Community</h2>
            <div class="text-content-wp45y">
                <p>QuantiQ Hub Pizzeria has always been more than just a restaurant – we're an integral part of our local community. Over the years, we've sponsored little league teams, hosted fundraisers for local schools, and provided meals for community events and charitable causes.</p>
                
                <p>We believe in giving back to the neighborhood that has supported us for over three decades. Our annual "Pizza for Teachers" event provides free meals to local educators, and we regularly donate to food banks and homeless shelters in the area.</p>
                
                <p>During the pandemic, we pivoted quickly to support our community by offering free delivery to elderly residents and healthcare workers. We also created family meal packages to help families during difficult times, always maintaining our commitment to quality and affordability.</p>
            </div>
            
            <div class="awards-gallery-px45n">
                <div class="award-item-qr78k">
                    <h4>Best Pizza 2023</h4>
                    <p>City Food Awards</p>
                </div>
                <div class="award-item-qr78k">
                    <h4>Community Champion</h4>
                    <p>Local Business Association</p>
                </div>
                <div class="award-item-qr78k">
                    <h4>Family Favorite</h4>
                    <p>Readers' Choice Awards</p>
                </div>
                <div class="award-item-qr78k">
                    <h4>Authentic Italian</h4>
                    <p>Italian-American Society</p>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#footer" class="continue-link-bm56p">Click here to continue</a> to our contact information
            </div>
        </section>
    </main>

    <footer id="footer" class="footer-section-zy56m">
        <div class="footer-content-bx89t">
            <div class="footer-block-nw34r">
                <h3 class="footer-title-kj67p">Contact Information</h3>
                <p>📍 1247 Maple Street, Downtown District</p>
                <p>📞 <a href="tel:+15551234567" class="contact-link-mx45t">(555) 123-4567</a></p>
                <p>✉️ <a href="mailto:info@quantiqhub.com" class="contact-link-mx45t">info@quantiqhub.com</a></p>
                <p>🌐 www.quantiqhub.com</p>
            </div>
            
            <div class="footer-block-nw34r">
                <h3 class="footer-title-kj67p">Hours of Operation</h3>
                <p>Monday - Thursday: 11:00 AM - 10:00 PM</p>
                <p>Friday - Saturday: 11:00 AM - 11:00 PM</p>
                <p>Sunday: 12:00 PM - 9:00 PM</p>
                <p>Delivery available until 30 minutes before closing</p>
            </div>
            
            <div class="footer-block-nw34r">
                <h3 class="footer-title-kj67p">Services</h3>
                <p>🍕 Dine-in Experience</p>
                <p>📦 Takeout Orders</p>
                <p>🚗 Free Local Delivery</p>
                <p>🎉 Catering Services</p>
                <p>👨‍👩‍👧‍👦 Private Party Hosting</p>
            </div>
            
            <div class="footer-block-nw34r">
                <h3 class="footer-title-kj67p">Follow Our Journey</h3>
                <p>Stay connected with QuantiQ Hub Pizzeria for the latest updates, special offers, and behind-the-scenes content from our kitchen.</p>
                <p><a href="#" onclick="openModal('privacy')" class="contact-link-mx45t">Privacy Policy</a></p>
                <p><a href="#" onclick="openModal('terms')" class="contact-link-mx45t">Terms of Service</a></p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #34495e;">
            <p>© 2024 QuantiQ Hub Pizzeria. All rights reserved. Serving authentic Italian pizza since 1987.</p>
        </div>
    </footer>

        <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-qv78n">
        <div class="modal-content-rl34k">
            <span class="close-button-zt89m" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>At QuantiQ Hub Pizzeria, we collect information you provide directly to us, such as when you place an order, make a reservation, or contact us. This may include your name, email address, phone number, delivery address, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to process your orders, communicate with you about your orders and our services, improve our website and services, and send you promotional materials if you have opted in to receive them.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties except as described in this policy. We may share your information with service providers who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at (555) 123-4567 or info@quantiqhub.com.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-qv78n">
        <div class="modal-content-rl34k">
            <span class="close-button-zt89m" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using QuantiQ Hub Pizzeria's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Use License</h3>
            <p>Permission is granted to temporarily download one copy of the materials on QuantiQ Hub Pizzeria's website for personal, non-commercial transitory viewing only.</p>
            
            <h3>Order Terms</h3>
            <p>All orders are subject to availability and confirmation of the order price. We reserve the right to refuse any order placed through our website. Delivery times are estimates and may vary based on location and demand.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment is due at the time of order placement for delivery and takeout orders. We accept cash, credit cards, and approved digital payment methods. Prices are subject to change without notice.</p>
            
            <h3>Cancellation Policy</h3>
            <p>Orders may be cancelled within 5 minutes of placement. After this time, cancellations may not be possible as food preparation may have already begun.</p>
            
            <h3>Limitation of Liability</h3>
            <p>QuantiQ Hub Pizzeria shall not be liable for any damages arising from the use or inability to use our services, even if we have been notified of the possibility of such damages.</p>
            
            <h3>Contact Information</h3>
            <p>Questions about the Terms of Service should be sent to us at info@quantiqhub.com or (555) 123-4567.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Modal functions
        function openModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal-overlay-qv78n')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to cards
            const cards = document.querySelectorAll('.specialty-card-lx45q');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Add click tracking for continue buttons
            const continueButtons = document.querySelectorAll('.continue-link-bm56p');
            continueButtons.forEach(button => {
                button.addEventListener('click', function() {
                    console.log('Continue button clicked:', this.textContent);
                });
            });

            // Add scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            const animateElements = document.querySelectorAll('.about-block-hj67k, .specialty-card-lx45q, .review-card-jk78n');
            animateElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });

        // Add phone number click tracking
        document.querySelector('a[href^="tel:"]').addEventListener('click', function() {
            console.log('Phone number clicked for call');
        });

        // Add email click tracking
        document.querySelector('a[href^="mailto:"]').addEventListener('click', function() {
            console.log('Email link clicked');
        });

        // Simple form validation for future contact forms
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add dynamic year to copyright
        document.addEventListener('DOMContentLoaded', function() {
            const currentYear = new Date().getFullYear();
            const copyrightText = document.querySelector('footer p:last-child');
            if (copyrightText) {
                copyrightText.innerHTML = copyrightText.innerHTML.replace('2024', currentYear);
            }
        });

        // Add loading state management
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
            console.log('QuantiQ Hub Pizzeria website fully loaded');
        });

        // Add error handling for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                this.style.display = 'none';
                console.log('Image failed to load:', this.src);
            });
        });

        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const openModals = document.querySelectorAll('.modal-overlay-qv78n[style*="block"]');
                openModals.forEach(modal => {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                });
            }
        });

        // Add click tracking for analytics
        document.addEventListener('click', function(e) {
            if (e.target.matches('.cta-button-nm89t')) {
                console.log('CTA button clicked:', e.target.textContent);
            }
            if (e.target.matches('.nav-link-bx89q')) {
                console.log('Navigation link clicked:', e.target.textContent);
            }
        });

        // Add scroll progress indicator
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.offsetHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            
            // You can use this for a progress bar if needed
            console.log('Scroll progress:', Math.round(scrollPercent) + '%');
        });

        // Add touch support for mobile devices
        let touchStartY = 0;
        document.addEventListener('touchstart', function(e) {
            touchStartY = e.touches[0].clientY;
        });

        document.addEventListener('touchend', function(e) {
            const touchEndY = e.changedTouches[0].clientY;
            const diff = touchStartY - touchEndY;
            
            if (Math.abs(diff) > 50) {
                console.log('Touch scroll detected');
            }
        });

        // Add performance monitoring
        if ('performance' in window) {
            window.addEventListener('load', function() {
                setTimeout(function() {
                    const perfData = performance.getEntriesByType('navigation')[0];
                    console.log('Page load time:', perfData.loadEventEnd - perfData.loadEventStart, 'ms');
                }, 0);
            });
        }

        // Add local storage for user preferences
        function saveUserPreference(key, value) {
            try {
                localStorage.setItem('quantiqhub_' + key, value);
            } catch (e) {
                console.log('Local storage not available');
            }
        }

        function getUserPreference(key) {
            try {
                return localStorage.getItem('quantiqhub_' + key);
            } catch (e) {
                console.log('Local storage not available');
                return null;
            }
        }

        // Add viewport detection
        function updateViewport() {
            const viewport = window.innerWidth;
            if (viewport < 768) {
                document.body.classList.add('mobile-view');
            } else {
                document.body.classList.remove('mobile-view');
            }
        }

        window.addEventListener('resize', updateViewport);
        updateViewport();

        // Add connection status monitoring
        window.addEventListener('online', function() {
            console.log('Connection restored');
        });

        window.addEventListener('offline', function() {
            console.log('Connection lost');
        });
    </script>

    <!-- Additional structured data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Restaurant",
        "name": "QuantiQ Hub Pizzeria",
        "description": "Authentic Italian pizzeria serving handcrafted pizzas since 1987",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1247 Maple Street",
            "addressLocality": "Downtown District",
            "addressCountry": "US"
        },
        "telephone": "+15551234567",
        "email": "info@quantiqhub.com",
        "url": "https://quantiqhub.com",
        "servesCuisine": "Italian",
        "priceRange": "$$",
        "openingHours": [
            "Mo-Th 11:00-22:00",
            "Fr-Sa 11:00-23:00",
            "Su 12:00-21:00"
        ],
        "foundingDate": "1987",
        "founder": {
            "@type": "Person",
            "name": "Giuseppe and Maria Rossi"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
            "reviewCount": "247"
        }
    }
    </script>
</body>
</html>

