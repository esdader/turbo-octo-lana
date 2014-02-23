<?php get_header(); ?>

<div class="main-content clearfix">
    <div class="l-row l-row-top clearfix">
        <div class="l-col l-col-left">
            <section class="hours">
                <h1 class="section-heady hours-heady ir">Hours</h1>
                    <table class="merchant-hours">
                        <thead>
                            <th>Day</th>
                            <th>Open</th>
                            <th>Close</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="days">Tuesday<br>Through<br>Thrusday</td>
                                <td class="start-hours">3:30<span>pm</span></td>
                                <td class="close-hours">12:00<span>am</span></td>
                            </tr>
                            <tr>
                                <td class="days">Friday</td>
                                <td class="start-hours">3:30<span>pm</span></td>
                                <td class="close-hours">2:30<span>am</span></td>
                            </tr>
                            <tr>
                                <td class="days">Saturday</td>
                                <td class="start-hours">12:00<span>pm</span></td>
                                <td class="close-hours">2:30<span>am</span></td>
                            </tr>
                            <tr>
                                <td class="days">Sunday</td>
                                <td class="start-hours">12:00<span>pm</span></td>
                                <td class="close-hours">8:00<span>pm</span></td>
                            </tr>
                        </tbody>
                    </table>
            </section>
            <div class="l-arrows-art">
                
            </div>
        </div>
        <div class="l-col l-col-right">
            <article class="story">
                <header>
                    <h1 class="section-heady story-heady ir">Our History</h1>
                </header>
                <section>
                    <p>
                        Roxy Piscazzi stowed away on a boat to get to America. When he met the love of his life, Lucia, he was forbidden from marrying her. So he kidnapped her and they started a family. Together they owned a bar in North Akron called Roxy’s Café. Lucia cooked in other notable restaurants in Akron. Lucia became known as one of the finest cooks in the area. After Roxy had passed, Lucia and their son John, opened a restaurant in the “Valley” known as the Wine Merchant. They focused <span class="story-callout ir">&#8220; It&#8217;s a poor host who seves his guests poor wine. For he must sit and drink it with them.&#8221;</span> on great wine and great food. From that pioneering establishment grew many of Akron’s best cooks and chefs. Even after the Wine Merchant closed, the legacy lived on.
                    </p>
                    <p>
                        The Merchant Tavern was born out of the principles that the John “The Merch” Piscazzi Lived by. Don’t cut corners. Prepare every meal like you would for your family. Buy only the best ingredients, and keep your food simple but good.
                    </p>
                    <p>
                        Our mission is to provide every guest with top notch service, great food, great cocktails, beer, and wine. We will treat you like a guest in our home and do everything we can to make you feel comfortable. We want The Merchant Tavern to be a place where friends become family.
                    </p>
                </section>
            </article>
        </div>
    </div>
    <div class="l-row l-row-bottom clearfix">
        <div class="l-col l-col-left">
            <section class="location">
                <h1 class="section-heady location-heady ir">
                    Location
                </h1>
                <p class="addy">1824 Merriman Rd., Akron, Ohio 44313</p>
                <a href="https://maps.google.com/maps?q=1824+Merriman+Road,+Akron,+OH&hl=en&sll=40.365277,-82.669252&sspn=5.733161,13.392334&oq=1824+merriman&hnear=1824+Merriman+Rd,+Akron,+Ohio+44313&t=m&z=16&iwloc=A" class="location-map ir">View on google maps</a>
            </section>
            <div class="l-arrows-art">
                
            </div>
        </div>
        <div class="l-col l-col-right">
            <div class="great-food-drinks ir">
                Great food and great drinks at the entrance to the Cuyahoga Valley National Park
            </div>
            <section class="news-events">
                <header>
                    <h1 class="section-heady news-events-heady ir">
                        New &amp; Events
                    </h1>
                    <p class="news-events-intro">BELOW IS A LIST OF NEWS AND UPCOMING EVENTS. PLEASE ALSO LIKE OUR 
FACEBOOK PAGE AND CHECK FOR DAILY SPECIALS AND HAPPY HOUR DEALS!</p>
                </header>
                <div class="news-items">
                    <?php 
                        // The Query

                        $args = array(
                                'post_type' => 'new_and_events',
                                'order' => 'ASC'
                            );
                        $the_query = new WP_Query( $args );
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <article class="news-item">
                                <header>
                                    <h1><?php the_title(); ?></h1>
                                    <?php if( get_field('time_and_day') ) : ?>
                                        <p class="meta-date"><?php the_field('time_and_day'); ?></p>
                                    <?php endif; ?>
                                </header>
                                <section>
                                    <?php the_content(); ?>
                                </section>
                            </article>

                        <?php endwhile; ?>
                    <?php else : ?>
                        
                    <?php endif; ?>
                    
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>
        </div>
    </div>
</div>


<?php get_footer(); ?>