<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<?php

if ( have_rows('home_layout') ):

  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'hero' ): ?>

      <section class="hero" style="background-image: url(<?php the_sub_field( 'bg' ); ?>);">
        <div class="container">

          <div class="hero__content">
            <?php $title = get_sub_field( 'title' );
            $subtitle = get_sub_field( 'subtitle' );

            if ($title): ?>
              <h1 class="hero__title"><?php echo $title; ?></h1>
            <?php endif; ?>
            <?php if ($subtitle): ?>
              <p class="hero__subtitle"><?php echo $subtitle; ?></p>
            <?php endif; ?>

            <?php ith_the_icon( 'arrow-down', 'hero__icon' ); ?>
          </div>

        </div>
      </section>

    <?php elseif ( get_row_layout() == 'about' ): ?>

      <section class="about">
        <div class="container">
          <div class="about__content">
            <?php the_sub_field( 'text' ); ?>

            <?php $btn = get_sub_field( 'btn' );
            if ($btn): ?>
              <a href="<?php echo esc_url($btn['url']);?>" class="btn"><?php echo $btn['title']; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'news' ): ?>

      <section class="last-news">
        <div class="container">
          <?php $title = get_sub_field( 'title' );
          if ($title): ?>
            <h2 class="section-title"><?php echo $title; ?></h2>
          <?php endif; ?>

          <?php $news = get_any_post( 'news', 3, '', '', 'date' );
          if ($news->have_posts()): ?>
            <div class="last-news__list">
              <?php while ($news->have_posts()): $news->the_post(); ?>
                <?php get_template_part( 'template-parts/news', 'card' ); ?>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          <?php endif; ?>

        </div>
      </section>

    <?php elseif ( get_row_layout() == 'championship_table' ): ?>

      <section>
        <div class="container">
          <?php $title = get_sub_field( 'title' );
          if ($title): ?>
            <h2 class="section-title"><?php echo $title; ?></h2>
          <?php endif; ?>

          <div class="championship-slider swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="table-responsive">
                  <table id="jockeyTable" class="championship-table">
                    <thead>
                    <tr>
                      <th>Jockey</th>
                      <th>Min Weight</th>
                      <th>Wins</th>
                      <th>Rides</th>
                      <th>Strike Rate</th>
                      <th>Level Stake</th>
                      <th>Win Prize</th>
                      <th>Total Prize</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Oisin Murphy</td>
                      <td>8-7</td>
                      <td>168</td>
                      <td>860</td>
                      <td>20%</td>
                      <td>45.01</td>
                      <td>£2,388,826</td>
                      <td>3,790,721</td>
                    </tr>
                    <tr>
                      <td>Daniel Tudhope</td>
                      <td>8-10</td>
                      <td>133</td>
                      <td>636</td>
                      <td>21%</td>
                      <td>+9.32</td>
                      <td>£1,631,015</td>
                      <td>2,635,815</td>
                    </tr>
                    <tr>
                      <td>Jim Crowley</td>
                      <td>8-7</td>
                      <td>99</td>
                      <td>429</td>
                      <td>23%</td>
                      <td>+29.76</td>
                      <td>£2,057,618</td>
                      <td>2,856,416</td>
                    </tr>
                    <tr>
                      <td>Tom Marquand</td>
                      <td>8-7</td>
                      <td>90</td>
                      <td>635</td>
                      <td>14%</td>
                      <td>+81.95</td>
                      <td>£646,811</td>
                      <td>1,126,630</td>
                    </tr>
                    <tr>
                      <td>P J McDonald</td>
                      <td>8-5</td>
                      <td>82</td>
                      <td>553</td>
                      <td>15%</td>
                      <td>29.94</td>
                      <td>£822,669</td>
                      <td>1,445,040</td>
                    </tr>
                    <tr>
                      <td>Ben Curtis</td>
                      <td>8-4</td>
                      <td>82</td>
                      <td>585</td>
                      <td>14%</td>
                      <td>30.42</td>
                      <td>£749,940</td>
                      <td>1,187,475</td>
                    </tr>
                    <tr>
                      <td>James Doyle</td>
                      <td>8-11</td>
                      <td>80</td>
                      <td>400</td>
                      <td>20%</td>
                      <td>32.59</td>
                      <td>£2,057,242</td>
                      <td>3,743,913</td>
                    </tr>
                    <tr>
                      <td>Silvestre De Sousa</td>
                      <td>8-1</td>
                      <td>79</td>
                      <td>461</td>
                      <td>17%</td>
                      <td>44.63</td>
                      <td>£1,592,211</td>
                      <td>2,725,650</td>
                    </tr>
                    <tr>
                      <td>Jason Watson</td>
                      <td>8-6</td>
                      <td>77</td>
                      <td>520</td>
                      <td>15%</td>
                      <td>+13.52</td>
                      <td>£1,127,345</td>
                      <td>1,516,975</td>
                    </tr>
                    <tr>
                      <td>Harry Bentley</td>
                      <td>8-4</td>
                      <td>71</td>
                      <td>498</td>
                      <td>14%</td>
                      <td>87.85</td>
                      <td>£814,079</td>
                      <td>1,365,815</td>
                    </tr>
                    <tr>
                      <td>Joe Fanning</td>
                      <td>8-0</td>
                      <td>66</td>
                      <td>408</td>
                      <td>16%</td>
                      <td>41.00</td>
                      <td>£796,287</td>
                      <td>1,142,185</td>
                    </tr>
                    <tr>
                      <td>David Allan</td>
                      <td>8-8</td>
                      <td>66</td>
                      <td>503</td>
                      <td>13%</td>
                      <td>114.41</td>
                      <td>£528,431</td>
                      <td>819,398</td>
                    </tr>
                    <tr>
                      <td>Hollie Doyle</td>
                      <td>8-0</td>
                      <td>63</td>
                      <td>447</td>
                      <td>14%</td>
                      <td>52.63</td>
                      <td>£371,293</td>
                      <td>709,337</td>
                    </tr>
                    <tr>
                      <td>Franny Norton</td>
                      <td>8-2</td>
                      <td>61</td>
                      <td>476</td>
                      <td>13%</td>
                      <td>213.93</td>
                      <td>£675,945</td>
                      <td>1,283,537</td>
                    </tr>
                    <tr>
                      <td>Adam Kirby</td>
                      <td>9-0</td>
                      <td>60</td>
                      <td>369</td>
                      <td>16%</td>
                      <td>57.75</td>
                      <td>£800,358</td>
                      <td>1,387,328</td>
                    </tr>
                    <tr>
                      <td>Jack Mitchell</td>
                      <td>8-8</td>
                      <td>59</td>
                      <td>333</td>
                      <td>18%</td>
                      <td>79.26</td>
                      <td>£300,695</td>
                      <td>467,581</td>
                    </tr>
                    <tr>
                      <td>Paul Hanagan</td>
                      <td>8-5</td>
                      <td>58</td>
                      <td>450</td>
                      <td>13%</td>
                      <td>58.31</td>
                      <td>£495,789</td>
                      <td>865,886</td>
                    </tr>
                    <tr>
                      <td>David Probert</td>
                      <td>8-6</td>
                      <td>58</td>
                      <td>627</td>
                      <td>9%</td>
                      <td>99.45</td>
                      <td>£340,805</td>
                      <td>676,139</td>
                    </tr>
                    <tr>
                      <td>Robert Havlin</td>
                      <td>8-7</td>
                      <td>55</td>
                      <td>370</td>
                      <td>15%</td>
                      <td>155.65</td>
                      <td>£490,863</td>
                      <td>904,622</td>
                    </tr>
                    <tr>
                      <td>Jason Hart</td>
                      <td>8-7</td>
                      <td>53</td>
                      <td>416</td>
                      <td>13%</td>
                      <td>10.64</td>
                      <td>£422,753</td>
                      <td>709,922</td>
                    </tr>
                    <tr>
                      <td>Ryan Moore</td>
                      <td>8-6</td>
                      <td>52</td>
                      <td>355</td>
                      <td>15%</td>
                      <td>143.39</td>
                      <td>£2,395,706</td>
                      <td>4,767,821</td>
                    </tr>
                    <tr>
                      <td>Richard Kingscote</td>
                      <td>8-6</td>
                      <td>52</td>
                      <td>433</td>
                      <td>12%</td>
                      <td>169.94</td>
                      <td>£599,967</td>
                      <td>1,093,260</td>
                    </tr>
                    <tr>
                      <td>David Egan</td>
                      <td>8-0</td>
                      <td>52</td>
                      <td>518</td>
                      <td>10%</td>
                      <td>191.10</td>
                      <td>£445,113</td>
                      <td>938,761</td>
                    </tr>
                    <tr>
                      <td>Frankie Dettori</td>
                      <td>8-8</td>
                      <td>51</td>
                      <td>206</td>
                      <td>25%</td>
                      <td>24.65</td>
                      <td>£5,678,509</td>
                      <td>6,992,104</td>
                    </tr>
                    <tr>
                      <td>Graham Lee</td>
                      <td>8-8</td>
                      <td>51</td>
                      <td>447</td>
                      <td>11%</td>
                      <td>179.50</td>
                      <td>£272,207</td>
                      <td>464,756</td>
                    </tr>
                    <tr>
                      <td>Sean Levey</td>
                      <td>8-9</td>
                      <td>50</td>
                      <td>370</td>
                      <td>14%</td>
                      <td>27.84</td>
                      <td>£1,282,973</td>
                      <td>1,698,076</td>
                    </tr>
                    <tr>
                      <td>Cieren Fallon</td>
                      <td>8-0</td>
                      <td>50</td>
                      <td>413</td>
                      <td>12%</td>
                      <td>118.17</td>
                      <td>£347,277</td>
                      <td>769,663</td>
                    </tr>
                    <tr>
                      <td>Andrea Atzeni</td>
                      <td>8-5</td>
                      <td>49</td>
                      <td>358</td>
                      <td>14%</td>
                      <td>43.32</td>
                      <td>£1,164,434</td>
                      <td>1,943,122</td>
                    </tr>
                    <tr>
                      <td>Rossa Ryan</td>
                      <td>8-8</td>
                      <td>45</td>
                      <td>389</td>
                      <td>12%</td>
                      <td>104.48</td>
                      <td>£319,134</td>
                      <td>499,166</td>
                    </tr>
                    <tr>
                      <td>Luke Morris</td>
                      <td>8-0</td>
                      <td>45</td>
                      <td>544</td>
                      <td>8%</td>
                      <td>300.13</td>
                      <td>£268,291</td>
                      <td>557,327</td>
                    </tr>
                    <tr>
                      <td>Dane O'Neill</td>
                      <td>8-9</td>
                      <td>43</td>
                      <td>242</td>
                      <td>18%</td>
                      <td>40.61</td>
                      <td>£390,371</td>
                      <td>573,478</td>
                    </tr>
                    <tr>
                      <td>Sean Davis</td>
                      <td>7-11</td>
                      <td>43</td>
                      <td>518</td>
                      <td>8%</td>
                      <td>194.16</td>
                      <td>£228,773</td>
                      <td>442,467</td>
                    </tr>
                    <tr>
                      <td>Hector Crouch</td>
                      <td>8-8</td>
                      <td>42</td>
                      <td>295</td>
                      <td>14%</td>
                      <td>37.11</td>
                      <td>£255,697</td>
                      <td>391,483</td>
                    </tr>
                    <tr>
                      <td>Jamie Spencer</td>
                      <td>8-6</td>
                      <td>39</td>
                      <td>258</td>
                      <td>15%</td>
                      <td>57.45</td>
                      <td>£595,730</td>
                      <td>1,271,504</td>
                    </tr>
                    <tr>
                      <td>Kieran O'Neill</td>
                      <td>8-0</td>
                      <td>39</td>
                      <td>359</td>
                      <td>11%</td>
                      <td>+29.36</td>
                      <td>£252,543</td>
                      <td>382,800</td>
                    </tr>
                    <tr>
                      <td>Pat Dobbs</td>
                      <td>8-9</td>
                      <td>37</td>
                      <td>257</td>
                      <td>14%</td>
                      <td>+37.64</td>
                      <td>£485,826</td>
                      <td>761,560</td>
                    </tr>
                    <tr>
                      <td>Pat Cosgrave</td>
                      <td>8-8</td>
                      <td>37</td>
                      <td>282</td>
                      <td>13%</td>
                      <td>100.78</td>
                      <td>£186,177</td>
                      <td>333,896</td>
                    </tr>
                    <tr>
                      <td>Paul Mulrennan</td>
                      <td>8-11</td>
                      <td>37</td>
                      <td>424</td>
                      <td>9%</td>
                      <td>159.70</td>
                      <td>£272,759</td>
                      <td>596,025</td>
                    </tr>
                    <tr>
                      <td>Kevin Stott</td>
                      <td>8-9</td>
                      <td>36</td>
                      <td>305</td>
                      <td>12%</td>
                      <td>99.19</td>
                      <td>£267,899</td>
                      <td>452,574</td>
                    </tr>
                    <tr>
                      <td>Clifford Lee</td>
                      <td>8-6</td>
                      <td>33</td>
                      <td>221</td>
                      <td>15%</td>
                      <td>+2.85</td>
                      <td>£177,586</td>
                      <td>284,900</td>
                    </tr>
                    <tr>
                      <td>Harrison Shaw</td>
                      <td>8-3</td>
                      <td>33</td>
                      <td>228</td>
                      <td>14%</td>
                      <td>+8.74</td>
                      <td>£156,072</td>
                      <td>236,282</td>
                    </tr>
                    <tr>
                      <td>Tony Hamilton</td>
                      <td>8-9</td>
                      <td>33</td>
                      <td>298</td>
                      <td>11%</td>
                      <td>77.64</td>
                      <td>£292,649</td>
                      <td>507,407</td>
                    </tr>
                    <tr>
                      <td>Liam Keniry</td>
                      <td>8-9</td>
                      <td>33</td>
                      <td>347</td>
                      <td>10%</td>
                      <td>90.32</td>
                      <td>£231,142</td>
                      <td>346,517</td>
                    </tr>
                    <tr>
                      <td>Charles Bishop</td>
                      <td>8-9</td>
                      <td>31</td>
                      <td>359</td>
                      <td>9%</td>
                      <td>87.39</td>
                      <td>£203,525</td>
                      <td>458,867</td>
                    </tr>
                    <tr>
                      <td>Tom Eaves</td>
                      <td>8-8</td>
                      <td>30</td>
                      <td>401</td>
                      <td>7%</td>
                      <td>88.48</td>
                      <td>£217,114</td>
                      <td>444,367</td>
                    </tr>
                    <tr>
                      <td>Connor Beasley</td>
                      <td>8-5</td>
                      <td>29</td>
                      <td>247</td>
                      <td>12%</td>
                      <td>66.54</td>
                      <td>£297,964</td>
                      <td>433,890</td>
                    </tr>
                    <tr>
                      <td>James Sullivan</td>
                      <td>8-0</td>
                      <td>29</td>
                      <td>357</td>
                      <td>8%</td>
                      <td>73.45</td>
                      <td>£195,203</td>
                      <td>307,501</td>
                    </tr>
                    <tr>
                      <td>Josephine Gordon</td>
                      <td>8-0</td>
                      <td>28</td>
                      <td>288</td>
                      <td>10%</td>
                      <td>69.92</td>
                      <td>£135,464</td>
                      <td>272,316</td>
                    </tr>
                    <tr>
                      <td>Martin Dwyer</td>
                      <td>8-2</td>
                      <td>27</td>
                      <td>264</td>
                      <td>10%</td>
                      <td>+9.25</td>
                      <td>£206,512</td>
                      <td>352,175</td>
                    </tr>
                    <tr>
                      <td>Ben Robinson</td>
                      <td>8-5</td>
                      <td>27</td>
                      <td>289</td>
                      <td>9%</td>
                      <td>135.59</td>
                      <td>£132,223</td>
                      <td>260,466</td>
                    </tr>
                    <tr>
                      <td>Rob Hornby</td>
                      <td>8-6</td>
                      <td>27</td>
                      <td>357</td>
                      <td>8%</td>
                      <td>123.28</td>
                      <td>£344,345</td>
                      <td>552,690</td>
                    </tr>
                    <tr>
                      <td>Shane Kelly</td>
                      <td>8-7</td>
                      <td>27</td>
                      <td>422</td>
                      <td>6%</td>
                      <td>180.11</td>
                      <td>£157,601</td>
                      <td>333,632</td>
                    </tr>
                    <tr>
                      <td>William Buick</td>
                      <td>8-7</td>
                      <td>26</td>
                      <td>132</td>
                      <td>20%</td>
                      <td>43.95</td>
                      <td>£639,665</td>
                      <td>918,084</td>
                    </tr>
                    <tr>
                      <td>Stevie Donohoe</td>
                      <td>8-8</td>
                      <td>26</td>
                      <td>276</td>
                      <td>9%</td>
                      <td>93.53</td>
                      <td>£199,769</td>
                      <td>335,184</td>
                    </tr>
                    <tr>
                      <td>Shane Gray</td>
                      <td>8-2</td>
                      <td>26</td>
                      <td>310</td>
                      <td>8%</td>
                      <td>96.92</td>
                      <td>£188,180</td>
                      <td>336,454</td>
                    </tr>
                    <tr>
                      <td>Kieran Shoemark</td>
                      <td>8-8</td>
                      <td>26</td>
                      <td>314</td>
                      <td>8%</td>
                      <td>27.77</td>
                      <td>£180,858</td>
                      <td>318,860</td>
                    </tr>
                    <tr>
                      <td>Callum Shepherd</td>
                      <td>8-7</td>
                      <td>26</td>
                      <td>320</td>
                      <td>8%</td>
                      <td>187.96</td>
                      <td>£180,802</td>
                      <td>315,638</td>
                    </tr>
                    <tr>
                      <td>Megan Nicholls</td>
                      <td>8-2</td>
                      <td>24</td>
                      <td>167</td>
                      <td>14%</td>
                      <td>30.50</td>
                      <td>£149,565</td>
                      <td>208,314</td>
                    </tr>
                    <tr>
                      <td>George Wood</td>
                      <td>8-3</td>
                      <td>24</td>
                      <td>249</td>
                      <td>10%</td>
                      <td>92.85</td>
                      <td>£113,550</td>
                      <td>212,071</td>
                    </tr>
                    <tr>
                      <td>Nicola Currie</td>
                      <td>8-0</td>
                      <td>24</td>
                      <td>293</td>
                      <td>8%</td>
                      <td>99.06</td>
                      <td>£211,075</td>
                      <td>364,916</td>
                    </tr>
                    <tr>
                      <td>Barry McHugh</td>
                      <td>8-3</td>
                      <td>23</td>
                      <td>197</td>
                      <td>12%</td>
                      <td>+10.63</td>
                      <td>£231,540</td>
                      <td>369,119</td>
                    </tr>
                    <tr>
                      <td>Jane Elliott</td>
                      <td>7-11</td>
                      <td>23</td>
                      <td>233</td>
                      <td>10%</td>
                      <td>43.54</td>
                      <td>£147,145</td>
                      <td>234,827</td>
                    </tr>
                    <tr>
                      <td>J F Egan</td>
                      <td>8-1</td>
                      <td>23</td>
                      <td>268</td>
                      <td>9%</td>
                      <td>124.29</td>
                      <td>£140,185</td>
                      <td>259,503</td>
                    </tr>
                    <tr>
                      <td>Thomas Greatrex</td>
                      <td>8-5</td>
                      <td>22</td>
                      <td>132</td>
                      <td>17%</td>
                      <td>+27.85</td>
                      <td>£99,099</td>
                      <td>137,675</td>
                    </tr>
                    <tr>
                      <td>Rowan Scott</td>
                      <td>8-4</td>
                      <td>22</td>
                      <td>207</td>
                      <td>11%</td>
                      <td>49.08</td>
                      <td>£120,144</td>
                      <td>201,498</td>
                    </tr>
                    <tr>
                      <td>Hayley Turner</td>
                      <td>8-0</td>
                      <td>22</td>
                      <td>210</td>
                      <td>10%</td>
                      <td>30.95</td>
                      <td>£230,713</td>
                      <td>355,235</td>
                    </tr>
                    <tr>
                      <td>David Nolan</td>
                      <td>9-0</td>
                      <td>22</td>
                      <td>270</td>
                      <td>8%</td>
                      <td>128.13</td>
                      <td>£114,210</td>
                      <td>260,895</td>
                    </tr>
                    <tr>
                      <td>Phil Dennis</td>
                      <td>8-2</td>
                      <td>22</td>
                      <td>330</td>
                      <td>7%</td>
                      <td>44.05</td>
                      <td>£252,020</td>
                      <td>388,541</td>
                    </tr>
                    <tr>
                      <td>Cam Hardie</td>
                      <td>8-0</td>
                      <td>22</td>
                      <td>465</td>
                      <td>5%</td>
                      <td>257.40</td>
                      <td>£98,201</td>
                      <td>253,921</td>
                    </tr>
                    <tr>
                      <td>Darragh Keenan</td>
                      <td>7-9</td>
                      <td>21</td>
                      <td>218</td>
                      <td>10%</td>
                      <td>84.82</td>
                      <td>£87,590</td>
                      <td>156,887</td>
                    </tr>
                    <tr>
                      <td>Gerald Mosse</td>
                      <td>8-9</td>
                      <td>21</td>
                      <td>228</td>
                      <td>9%</td>
                      <td>99.41</td>
                      <td>£380,290</td>
                      <td>690,759</td>
                    </tr>
                    <tr>
                      <td>Nathan Evans</td>
                      <td>8-0</td>
                      <td>21</td>
                      <td>268</td>
                      <td>8%</td>
                      <td>63.92</td>
                      <td>£160,840</td>
                      <td>274,757</td>
                    </tr>
                    <tr>
                      <td>Duran Fentiman</td>
                      <td>8-0</td>
                      <td>20</td>
                      <td>236</td>
                      <td>8%</td>
                      <td>+20.83</td>
                      <td>£128,881</td>
                      <td>231,473</td>
                    </tr>
                    <tr>
                      <td>Daniel Muscutt</td>
                      <td>8-9</td>
                      <td>20</td>
                      <td>247</td>
                      <td>8%</td>
                      <td>107.71</td>
                      <td>£112,822</td>
                      <td>245,449</td>
                    </tr>
                    <tr>
                      <td>Joey Haynes</td>
                      <td>8-3</td>
                      <td>19</td>
                      <td>202</td>
                      <td>9%</td>
                      <td>+33.50</td>
                      <td>£81,121</td>
                      <td>174,399</td>
                    </tr>
                    <tr>
                      <td>Andrew Mullen</td>
                      <td>8-0</td>
                      <td>19</td>
                      <td>400</td>
                      <td>5%</td>
                      <td>254.79</td>
                      <td>£82,360</td>
                      <td>213,902</td>
                    </tr>
                    <tr>
                      <td>Marco Ghiani</td>
                      <td>8-2</td>
                      <td>18</td>
                      <td>119</td>
                      <td>15%</td>
                      <td>+11.71</td>
                      <td>£118,771</td>
                      <td>223,136</td>
                    </tr>
                    <tr>
                      <td>Jamie Gormley</td>
                      <td>7-11</td>
                      <td>18</td>
                      <td>240</td>
                      <td>8%</td>
                      <td>93.17</td>
                      <td>£81,876</td>
                      <td>184,764</td>
                    </tr>
                    <tr>
                      <td>Sam James</td>
                      <td>8-6</td>
                      <td>17</td>
                      <td>197</td>
                      <td>9%</td>
                      <td>74.08</td>
                      <td>£98,696</td>
                      <td>176,623</td>
                    </tr>
                    <tr>
                      <td>Jack Garritty</td>
                      <td>8-12</td>
                      <td>17</td>
                      <td>201</td>
                      <td>8%</td>
                      <td>51.92</td>
                      <td>£117,803</td>
                      <td>177,843</td>
                    </tr>
                    <tr>
                      <td>Charlie Bennett</td>
                      <td>8-4</td>
                      <td>17</td>
                      <td>246</td>
                      <td>7%</td>
                      <td>72.00</td>
                      <td>£68,280</td>
                      <td>132,386</td>
                    </tr>
                    <tr>
                      <td>Joshua Bryan</td>
                      <td>8-10</td>
                      <td>16</td>
                      <td>93</td>
                      <td>17%</td>
                      <td>+9.87</td>
                      <td>£61,778</td>
                      <td>94,605</td>
                    </tr>
                    <tr>
                      <td>William Carver</td>
                      <td>8-1</td>
                      <td>16</td>
                      <td>111</td>
                      <td>14%</td>
                      <td>28.62</td>
                      <td>£67,880</td>
                      <td>114,642</td>
                    </tr>
                    <tr>
                      <td>Robert Winston</td>
                      <td>8-11</td>
                      <td>16</td>
                      <td>149</td>
                      <td>11%</td>
                      <td>32.04</td>
                      <td>£150,430</td>
                      <td>237,235</td>
                    </tr>
                    <tr>
                      <td>Sean Kirrane</td>
                      <td>8-0</td>
                      <td>15</td>
                      <td>120</td>
                      <td>13%</td>
                      <td>47.44</td>
                      <td>£53,142</td>
                      <td>88,744</td>
                    </tr>
                    <tr>
                      <td>Adam McNamara</td>
                      <td>8-8</td>
                      <td>15</td>
                      <td>120</td>
                      <td>13%</td>
                      <td>41.51</td>
                      <td>£58,816</td>
                      <td>100,255</td>
                    </tr>
                    <tr>
                      <td>Ryan Tate</td>
                      <td>8-7</td>
                      <td>15</td>
                      <td>146</td>
                      <td>10%</td>
                      <td>20.28</td>
                      <td>£72,733</td>
                      <td>115,547</td>
                    </tr>
                    <tr>
                      <td>Lewis Edmunds</td>
                      <td>8-8</td>
                      <td>15</td>
                      <td>206</td>
                      <td>7%</td>
                      <td>47.37</td>
                      <td>£83,027</td>
                      <td>160,112</td>
                    </tr>
                    <tr>
                      <td>Alistair Rawlinson</td>
                      <td>8-10</td>
                      <td>14</td>
                      <td>186</td>
                      <td>8%</td>
                      <td>76.35</td>
                      <td>£173,108</td>
                      <td>292,193</td>
                    </tr>
                    <tr>
                      <td>Paddy Mathers</td>
                      <td>8-0</td>
                      <td>14</td>
                      <td>263</td>
                      <td>5%</td>
                      <td>143.37</td>
                      <td>£82,448</td>
                      <td>276,448</td>
                    </tr>
                    <tr>
                      <td>Seamus Cronin</td>
                      <td>8-5</td>
                      <td>13</td>
                      <td>87</td>
                      <td>15%</td>
                      <td>+10.88</td>
                      <td>£65,169</td>
                      <td>89,824</td>
                    </tr>
                    <tr>
                      <td>Kieren Fox</td>
                      <td>8-5</td>
                      <td>13</td>
                      <td>132</td>
                      <td>10%</td>
                      <td>64.12</td>
                      <td>£66,688</td>
                      <td>115,137</td>
                    </tr>
                    <tr>
                      <td>Thore Hammer Hansen</td>
                      <td>7-11</td>
                      <td>13</td>
                      <td>136</td>
                      <td>10%</td>
                      <td>32.87</td>
                      <td>£88,246</td>
                      <td>198,918</td>
                    </tr>
                    <tr>
                      <td>Faye McManoman</td>
                      <td>7-10</td>
                      <td>13</td>
                      <td>150</td>
                      <td>9%</td>
                      <td>86.54</td>
                      <td>£61,152</td>
                      <td>121,125</td>
                    </tr>
                    <tr>
                      <td>Scott McCullagh</td>
                      <td>8-7</td>
                      <td>13</td>
                      <td>159</td>
                      <td>8%</td>
                      <td>61.42</td>
                      <td>£48,388</td>
                      <td>122,633</td>
                    </tr>
                    <tr>
                      <td>Jimmy Quinn</td>
                      <td>8-0</td>
                      <td>13</td>
                      <td>191</td>
                      <td>7%</td>
                      <td>71.75</td>
                      <td>£111,570</td>
                      <td>174,698</td>
                    </tr>
                    <tr>
                      <td>Nicky Mackay</td>
                      <td>8-0</td>
                      <td>12</td>
                      <td>109</td>
                      <td>11%</td>
                      <td>42.72</td>
                      <td>£86,475</td>
                      <td>119,410</td>
                    </tr>
                    <tr>
                      <td>Angus Villiers</td>
                      <td>7-12</td>
                      <td>12</td>
                      <td>110</td>
                      <td>11%</td>
                      <td>39.59</td>
                      <td>£93,645</td>
                      <td>159,729</td>
                    </tr>
                    <tr>
                      <td>Georgia Dobie</td>
                      <td>7-13</td>
                      <td>12</td>
                      <td>123</td>
                      <td>10%</td>
                      <td>55.22</td>
                      <td>£69,802</td>
                      <td>126,384</td>
                    </tr>
                    <tr>
                      <td>Liam Jones</td>
                      <td>8-2</td>
                      <td>12</td>
                      <td>161</td>
                      <td>7%</td>
                      <td>14.18</td>
                      <td>£46,706</td>
                      <td>100,332</td>
                    </tr>
                    <tr>
                      <td>Kerrin McEvoy</td>
                      <td>8-0</td>
                      <td>11</td>
                      <td>69</td>
                      <td>16%</td>
                      <td>16.75</td>
                      <td>£83,542</td>
                      <td>270,419</td>
                    </tr>
                    <tr>
                      <td>Louis Steward</td>
                      <td>8-11</td>
                      <td>10</td>
                      <td>57</td>
                      <td>18%</td>
                      <td>11.37</td>
                      <td>£112,174</td>
                      <td>151,712</td>
                    </tr>
                    <tr>
                      <td>Stefano Cherchi</td>
                      <td>8-3</td>
                      <td>10</td>
                      <td>72</td>
                      <td>14%</td>
                      <td>+52.00</td>
                      <td>£46,415</td>
                      <td>76,258</td>
                    </tr>
                    <tr>
                      <td>Ben Sanderson</td>
                      <td>8-5</td>
                      <td>10</td>
                      <td>107</td>
                      <td>9%</td>
                      <td>52.50</td>
                      <td>£59,454</td>
                      <td>103,980</td>
                    </tr>
                    <tr>
                      <td>Finley Marsh</td>
                      <td>8-6</td>
                      <td>10</td>
                      <td>122</td>
                      <td>8%</td>
                      <td>38.25</td>
                      <td>£47,376</td>
                      <td>96,886</td>
                    </tr>
                    <tr>
                      <td>Gabriele Malune</td>
                      <td>7-13</td>
                      <td>10</td>
                      <td>134</td>
                      <td>7%</td>
                      <td>64.63</td>
                      <td>£58,548</td>
                      <td>98,562</td>
                    </tr>
                    <tr>
                      <td>Connor Murtagh</td>
                      <td>8-4</td>
                      <td>10</td>
                      <td>177</td>
                      <td>6%</td>
                      <td>77.25</td>
                      <td>£44,541</td>
                      <td>113,350</td>
                    </tr>
                    <tr>
                      <td>Georgia Cox</td>
                      <td>8-4</td>
                      <td>9</td>
                      <td>61</td>
                      <td>15%</td>
                      <td>8.21</td>
                      <td>£47,676</td>
                      <td>64,681</td>
                    </tr>
                    <tr>
                      <td>Rhiain Ingram</td>
                      <td>7-9</td>
                      <td>9</td>
                      <td>79</td>
                      <td>11%</td>
                      <td>6.15</td>
                      <td>£28,592</td>
                      <td>42,911</td>
                    </tr>
                    <tr>
                      <td>Paula Muir</td>
                      <td>7-11</td>
                      <td>9</td>
                      <td>189</td>
                      <td>5%</td>
                      <td>129.62</td>
                      <td>£40,287</td>
                      <td>111,425</td>
                    </tr>
                    <tr>
                      <td>Tom Queally</td>
                      <td>8-11</td>
                      <td>9</td>
                      <td>210</td>
                      <td>4%</td>
                      <td>125.12</td>
                      <td>£52,638</td>
                      <td>135,802</td>
                    </tr>
                    <tr>
                      <td>Callum Rodriguez</td>
                      <td>8-10</td>
                      <td>8</td>
                      <td>68</td>
                      <td>12%</td>
                      <td>24.08</td>
                      <td>£49,926</td>
                      <td>90,861</td>
                    </tr>
                    <tr>
                      <td>Sophie Ralston</td>
                      <td>7-9</td>
                      <td>8</td>
                      <td>103</td>
                      <td>8%</td>
                      <td>+60.50</td>
                      <td>£39,784</td>
                      <td>67,826</td>
                    </tr>
                    <tr>
                      <td>Brett Doyle</td>
                      <td>8-5</td>
                      <td>8</td>
                      <td>118</td>
                      <td>7%</td>
                      <td>8.36</td>
                      <td>£28,398</td>
                      <td>93,171</td>
                    </tr>
                    <tr>
                      <td>Robbie Downey</td>
                      <td>8-9</td>
                      <td>8</td>
                      <td>120</td>
                      <td>7%</td>
                      <td>39.83</td>
                      <td>£44,628</td>
                      <td>88,311</td>
                    </tr>
                    <tr>
                      <td>Trevor Whelan</td>
                      <td>8-9</td>
                      <td>8</td>
                      <td>136</td>
                      <td>6%</td>
                      <td>91.12</td>
                      <td>£34,997</td>
                      <td>68,361</td>
                    </tr>
                    <tr>
                      <td>Toby Eley</td>
                      <td>8-2</td>
                      <td>8</td>
                      <td>138</td>
                      <td>6%</td>
                      <td>76.87</td>
                      <td>£30,404</td>
                      <td>72,277</td>
                    </tr>
                    <tr>
                      <td>Theodore Ladd</td>
                      <td>7-13</td>
                      <td>8</td>
                      <td>151</td>
                      <td>5%</td>
                      <td>113.92</td>
                      <td>£81,190</td>
                      <td>151,719</td>
                    </tr>
                    <tr>
                      <td>William Cox</td>
                      <td>7-13</td>
                      <td>8</td>
                      <td>192</td>
                      <td>4%</td>
                      <td>134.37</td>
                      <td>£41,428</td>
                      <td>103,891</td>
                    </tr>
                    <tr>
                      <td>Tyler Saunders</td>
                      <td>8-6</td>
                      <td>7</td>
                      <td>45</td>
                      <td>16%</td>
                      <td>12.65</td>
                      <td>£24,517</td>
                      <td>46,931</td>
                    </tr>
                    <tr>
                      <td>Rhona Pindar</td>
                      <td>8-0</td>
                      <td>7</td>
                      <td>66</td>
                      <td>11%</td>
                      <td>21.69</td>
                      <td>£23,223</td>
                      <td>43,599</td>
                    </tr>
                    <tr>
                      <td>Edward Greatrex</td>
                      <td>8-6</td>
                      <td>7</td>
                      <td>84</td>
                      <td>8%</td>
                      <td>54.74</td>
                      <td>£32,135</td>
                      <td>55,706</td>
                    </tr>
                    <tr>
                      <td>Cameron Noble</td>
                      <td>8-5</td>
                      <td>7</td>
                      <td>93</td>
                      <td>8%</td>
                      <td>49.00</td>
                      <td>£56,690</td>
                      <td>118,527</td>
                    </tr>
                    <tr>
                      <td>Donagh O'Connor</td>
                      <td>8-11</td>
                      <td>6</td>
                      <td>9</td>
                      <td>67%</td>
                      <td>+31.83</td>
                      <td>£19,083</td>
                      <td>20,795</td>
                    </tr>
                    <tr>
                      <td>Miss Brodie Hampson</td>
                      <td>9-12</td>
                      <td>6</td>
                      <td>17</td>
                      <td>35%</td>
                      <td>+8.50</td>
                      <td>£19,216</td>
                      <td>24,826</td>
                    </tr>
                    <tr>
                      <td>C Y Ho</td>
                      <td>8-3</td>
                      <td>6</td>
                      <td>22</td>
                      <td>27%</td>
                      <td>+11.25</td>
                      <td>£71,809</td>
                      <td>94,657</td>
                    </tr>
                    <tr>
                      <td>Colm O'Donoghue</td>
                      <td>8-7</td>
                      <td>6</td>
                      <td>40</td>
                      <td>15%</td>
                      <td>16.16</td>
                      <td>£51,946</td>
                      <td>96,966</td>
                    </tr>
                    <tr>
                      <td>Kate Leahy</td>
                      <td>8-5</td>
                      <td>6</td>
                      <td>49</td>
                      <td>12%</td>
                      <td>5.50</td>
                      <td>£28,237</td>
                      <td>44,713</td>
                    </tr>
                    <tr>
                      <td>Zak Wheatley</td>
                      <td>8-0</td>
                      <td>6</td>
                      <td>57</td>
                      <td>11%</td>
                      <td>+16.50</td>
                      <td>£28,226</td>
                      <td>49,445</td>
                    </tr>
                    <tr>
                      <td>Gavin Ashton</td>
                      <td>7-9</td>
                      <td>6</td>
                      <td>82</td>
                      <td>7%</td>
                      <td>49.83</td>
                      <td>£20,959</td>
                      <td>48,887</td>
                    </tr>
                    <tr>
                      <td>Conor McGovern</td>
                      <td>8-4</td>
                      <td>6</td>
                      <td>93</td>
                      <td>6%</td>
                      <td>42.50</td>
                      <td>£26,974</td>
                      <td>64,699</td>
                    </tr>
                    <tr>
                      <td>Raul Da Silva</td>
                      <td>8-0</td>
                      <td>6</td>
                      <td>158</td>
                      <td>4%</td>
                      <td>115.50</td>
                      <td>£20,053</td>
                      <td>80,892</td>
                    </tr>
                    <tr>
                      <td>Dougie Costello</td>
                      <td>8-10</td>
                      <td>6</td>
                      <td>190</td>
                      <td>3%</td>
                      <td>106.97</td>
                      <td>£24,711</td>
                      <td>82,445</td>
                    </tr>
                    <tr>
                      <td>Rachel Richardson</td>
                      <td>8-2</td>
                      <td>6</td>
                      <td>197</td>
                      <td>3%</td>
                      <td>135.12</td>
                      <td>£20,636</td>
                      <td>80,264</td>
                    </tr>
                    <tr>
                      <td>Miss Sarah Bowen</td>
                      <td>8-12</td>
                      <td>5</td>
                      <td>30</td>
                      <td>17%</td>
                      <td>+13.50</td>
                      <td>£33,066</td>
                      <td>43,497</td>
                    </tr>
                    <tr>
                      <td>Miss Becky Smith</td>
                      <td>9-2</td>
                      <td>5</td>
                      <td>34</td>
                      <td>15%</td>
                      <td>10.90</td>
                      <td>£20,041</td>
                      <td>28,732</td>
                    </tr>
                    <tr>
                      <td>Cian MacRedmond</td>
                      <td>8-2</td>
                      <td>5</td>
                      <td>38</td>
                      <td>13%</td>
                      <td>+28.00</td>
                      <td>£34,239</td>
                      <td>45,073</td>
                    </tr>
                    <tr>
                      <td>Sebastian Woods</td>
                      <td>8-9</td>
                      <td>5</td>
                      <td>42</td>
                      <td>12%</td>
                      <td>16.50</td>
                      <td>£15,913</td>
                      <td>30,405</td>
                    </tr>
                    <tr>
                      <td>Izzy Clifton</td>
                      <td>7-9</td>
                      <td>5</td>
                      <td>46</td>
                      <td>11%</td>
                      <td>+33.00</td>
                      <td>£18,792</td>
                      <td>42,572</td>
                    </tr>
                    <tr>
                      <td>Corey Madden</td>
                      <td>7-13</td>
                      <td>5</td>
                      <td>54</td>
                      <td>9%</td>
                      <td>17.62</td>
                      <td>£21,056</td>
                      <td>39,327</td>
                    </tr>
                    <tr>
                      <td>Donnacha O'Brien</td>
                      <td>8-12</td>
                      <td>5</td>
                      <td>54</td>
                      <td>9%</td>
                      <td>31.12</td>
                      <td>£1,419,167</td>
                      <td>1,959,842</td>
                    </tr>
                    <tr>
                      <td>Pierre-Louis Jamin</td>
                      <td>8-3</td>
                      <td>5</td>
                      <td>58</td>
                      <td>9%</td>
                      <td>22.50</td>
                      <td>£23,159</td>
                      <td>47,216</td>
                    </tr>
                    <tr>
                      <td>Danny Redmond</td>
                      <td>8-11</td>
                      <td>5</td>
                      <td>65</td>
                      <td>8%</td>
                      <td>26.50</td>
                      <td>£29,655</td>
                      <td>56,379</td>
                    </tr>
                    <tr>
                      <td>Ellie MacKenzie</td>
                      <td>7-11</td>
                      <td>5</td>
                      <td>66</td>
                      <td>8%</td>
                      <td>3.25</td>
                      <td>£19,148</td>
                      <td>35,635</td>
                    </tr>
                    <tr>
                      <td>Elisha Whittington</td>
                      <td>7-8</td>
                      <td>5</td>
                      <td>79</td>
                      <td>6%</td>
                      <td>4.75</td>
                      <td>£20,169</td>
                      <td>40,725</td>
                    </tr>
                    <tr>
                      <td>Aled Beech</td>
                      <td>7-12</td>
                      <td>5</td>
                      <td>84</td>
                      <td>6%</td>
                      <td>41.00</td>
                      <td>£17,725</td>
                      <td>43,312</td>
                    </tr>
                    <tr>
                      <td>George Downing</td>
                      <td>8-9</td>
                      <td>5</td>
                      <td>91</td>
                      <td>5%</td>
                      <td>+11.50</td>
                      <td>£15,849</td>
                      <td>37,068</td>
                    </tr>
                    <tr>
                      <td>Dylan Hogan</td>
                      <td>8-6</td>
                      <td>5</td>
                      <td>131</td>
                      <td>4%</td>
                      <td>85.00</td>
                      <td>£19,568</td>
                      <td>77,058</td>
                    </tr>
                    <tr>
                      <td>Eoin Walsh</td>
                      <td>8-4</td>
                      <td>5</td>
                      <td>149</td>
                      <td>3%</td>
                      <td>80.50</td>
                      <td>£15,590</td>
                      <td>46,371</td>
                    </tr>
                    <tr>
                      <td>Miss Imogen Mathias</td>
                      <td>8-11</td>
                      <td>4</td>
                      <td>15</td>
                      <td>27%</td>
                      <td>+33.75</td>
                      <td>£12,121</td>
                      <td>15,690</td>
                    </tr>
                    <tr>
                      <td>Miss Joanna Mason</td>
                      <td>9-2</td>
                      <td>4</td>
                      <td>36</td>
                      <td>11%</td>
                      <td>12.17</td>
                      <td>£16,435</td>
                      <td>29,199</td>
                    </tr>
                    <tr>
                      <td>Poppy Bridgwater</td>
                      <td>8-3</td>
                      <td>4</td>
                      <td>63</td>
                      <td>6%</td>
                      <td>+2.00</td>
                      <td>£18,468</td>
                      <td>34,814</td>
                    </tr>
                    <tr>
                      <td>Andrew Elliott</td>
                      <td>8-3</td>
                      <td>4</td>
                      <td>98</td>
                      <td>4%</td>
                      <td>39.00</td>
                      <td>£20,765</td>
                      <td>39,558</td>
                    </tr>
                    <tr>
                      <td>Andrew Breslin</td>
                      <td>7-9</td>
                      <td>4</td>
                      <td>115</td>
                      <td>3%</td>
                      <td>89.25</td>
                      <td>£15,687</td>
                      <td>47,630</td>
                    </tr>
                    <tr>
                      <td>Mr William Easterby</td>
                      <td>9-11</td>
                      <td>3</td>
                      <td>9</td>
                      <td>33%</td>
                      <td>+4.75</td>
                      <td>£12,228</td>
                      <td>16,711</td>
                    </tr>
                    <tr>
                      <td>Mrs Carol Bartley</td>
                      <td>8-9</td>
                      <td>3</td>
                      <td>15</td>
                      <td>20%</td>
                      <td>+32.00</td>
                      <td>£21,475</td>
                      <td>23,575</td>
                    </tr>
                    <tr>
                      <td>Levi Williams</td>
                      <td>7-12</td>
                      <td>3</td>
                      <td>18</td>
                      <td>17%</td>
                      <td>+23.00</td>
                      <td>£10,642</td>
                      <td>16,740</td>
                    </tr>
                    <tr>
                      <td>Mr Patrick Millman</td>
                      <td>9-9</td>
                      <td>3</td>
                      <td>19</td>
                      <td>16%</td>
                      <td>+5.91</td>
                      <td>£10,656</td>
                      <td>22,083</td>
                    </tr>
                    <tr>
                      <td>Miss Amy Collier</td>
                      <td>9-8</td>
                      <td>3</td>
                      <td>21</td>
                      <td>14%</td>
                      <td>2.50</td>
                      <td>£10,779</td>
                      <td>18,250</td>
                    </tr>
                    <tr>
                      <td>Mark Crehan</td>
                      <td>8-4</td>
                      <td>3</td>
                      <td>23</td>
                      <td>13%</td>
                      <td>9.00</td>
                      <td>£14,296</td>
                      <td>23,331</td>
                    </tr>
                    <tr>
                      <td>Mr Eireann Cagney</td>
                      <td>9-2</td>
                      <td>3</td>
                      <td>24</td>
                      <td>13%</td>
                      <td>+5.00</td>
                      <td>£14,507</td>
                      <td>19,712</td>
                    </tr>
                    <tr>
                      <td>Jonathan Fisher</td>
                      <td>8-5</td>
                      <td>3</td>
                      <td>30</td>
                      <td>10%</td>
                      <td>+16.50</td>
                      <td>£14,490</td>
                      <td>25,123</td>
                    </tr>
                    <tr>
                      <td>Wayne Lordan</td>
                      <td>8-0</td>
                      <td>3</td>
                      <td>32</td>
                      <td>9%</td>
                      <td>+12.00</td>
                      <td>£399,805</td>
                      <td>944,694</td>
                    </tr>
                    <tr>
                      <td>Amelia Glass</td>
                      <td>8-0</td>
                      <td>3</td>
                      <td>33</td>
                      <td>9%</td>
                      <td>+24.00</td>
                      <td>£9,703</td>
                      <td>19,680</td>
                    </tr>
                    <tr>
                      <td>Gemma Tutty</td>
                      <td>8-12</td>
                      <td>3</td>
                      <td>37</td>
                      <td>8%</td>
                      <td>17.50</td>
                      <td>£11,465</td>
                      <td>24,367</td>
                    </tr>
                    <tr>
                      <td>Luke Catton</td>
                      <td>8-7</td>
                      <td>3</td>
                      <td>40</td>
                      <td>8%</td>
                      <td>19.50</td>
                      <td>£9,768</td>
                      <td>28,227</td>
                    </tr>
                    <tr>
                      <td>Shelley Birkett</td>
                      <td>8-2</td>
                      <td>3</td>
                      <td>45</td>
                      <td>7%</td>
                      <td>+12.50</td>
                      <td>£11,838</td>
                      <td>24,398</td>
                    </tr>
                    <tr>
                      <td>Ella McCain</td>
                      <td>7-12</td>
                      <td>3</td>
                      <td>48</td>
                      <td>6%</td>
                      <td>24.00</td>
                      <td>£10,415</td>
                      <td>23,008</td>
                    </tr>
                    <tr>
                      <td>John Fahy</td>
                      <td>8-4</td>
                      <td>3</td>
                      <td>57</td>
                      <td>5%</td>
                      <td>11.55</td>
                      <td>£9,268</td>
                      <td>18,930</td>
                    </tr>
                    <tr>
                      <td>Victor Santos</td>
                      <td>7-9</td>
                      <td>3</td>
                      <td>60</td>
                      <td>5%</td>
                      <td>39.50</td>
                      <td>£11,061</td>
                      <td>26,163</td>
                    </tr>
                    <tr>
                      <td>Laura Coughlan</td>
                      <td>7-9</td>
                      <td>3</td>
                      <td>68</td>
                      <td>4%</td>
                      <td>34.50</td>
                      <td>£10,729</td>
                      <td>28,626</td>
                    </tr>
                    <tr>
                      <td>Isobel Francis</td>
                      <td>7-7</td>
                      <td>3</td>
                      <td>68</td>
                      <td>4%</td>
                      <td>50.25</td>
                      <td>£13,132</td>
                      <td>28,559</td>
                    </tr>
                    <tr>
                      <td>Harry Russell</td>
                      <td>8-6</td>
                      <td>3</td>
                      <td>82</td>
                      <td>4%</td>
                      <td>65.25</td>
                      <td>£11,838</td>
                      <td>32,280</td>
                    </tr>
                    <tr>
                      <td>Kieran Schofield</td>
                      <td>7-9</td>
                      <td>3</td>
                      <td>83</td>
                      <td>4%</td>
                      <td>75.00</td>
                      <td>£16,324</td>
                      <td>41,962</td>
                    </tr>
                    <tr>
                      <td>Miss Shannon Watts</td>
                      <td>8-9</td>
                      <td>2</td>
                      <td>13</td>
                      <td>15%</td>
                      <td>+19.00</td>
                      <td>£6,725</td>
                      <td>9,233</td>
                    </tr>
                    <tr>
                      <td>Miss Emma Sayer</td>
                      <td>9-12</td>
                      <td>2</td>
                      <td>14</td>
                      <td>14%</td>
                      <td>4.00</td>
                      <td>£16,196</td>
                      <td>22,691</td>
                    </tr>
                    <tr>
                      <td>Rhys Clutterbuck</td>
                      <td>8-6</td>
                      <td>2</td>
                      <td>15</td>
                      <td>13%</td>
                      <td>+5.00</td>
                      <td>£10,867</td>
                      <td>13,618</td>
                    </tr>
                    <tr>
                      <td>Colin Keane</td>
                      <td>8-8</td>
                      <td>2</td>
                      <td>15</td>
                      <td>13%</td>
                      <td>+5.25</td>
                      <td>£612,450</td>
                      <td>643,724</td>
                    </tr>
                    <tr>
                      <td>Oliver Searle</td>
                      <td>8-1</td>
                      <td>2</td>
                      <td>15</td>
                      <td>13%</td>
                      <td>0.50</td>
                      <td>£10,253</td>
                      <td>16,227</td>
                    </tr>
                    <tr>
                      <td>Miss Emma Todd</td>
                      <td>9-7</td>
                      <td>2</td>
                      <td>15</td>
                      <td>13%</td>
                      <td></td>
                      <td>£6,925</td>
                      <td>11,738</td>
                    </tr>
                    <tr>
                      <td>Mr James Harding</td>
                      <td>9-12</td>
                      <td>2</td>
                      <td>16</td>
                      <td>13%</td>
                      <td>3.50</td>
                      <td>£6,675</td>
                      <td>10,584</td>
                    </tr>
                    <tr>
                      <td>Ryan While</td>
                      <td>8-9</td>
                      <td>2</td>
                      <td>19</td>
                      <td>11%</td>
                      <td>5.00</td>
                      <td>£8,312</td>
                      <td>17,307</td>
                    </tr>
                    <tr>
                      <td>Aaron Jones</td>
                      <td>8-0</td>
                      <td>2</td>
                      <td>21</td>
                      <td>10%</td>
                      <td>+27.00</td>
                      <td>£6,533</td>
                      <td>12,426</td>
                    </tr>
                    <tr>
                      <td>Chris Hayes</td>
                      <td>8-4</td>
                      <td>2</td>
                      <td>25</td>
                      <td>8%</td>
                      <td>2.00</td>
                      <td>£41,359</td>
                      <td>440,247</td>
                    </tr>
                    <tr>
                      <td>George Bass</td>
                      <td>8-0</td>
                      <td>2</td>
                      <td>27</td>
                      <td>7%</td>
                      <td>13.50</td>
                      <td>£7,908</td>
                      <td>17,822</td>
                    </tr>
                    <tr>
                      <td>Seamie Heffernan</td>
                      <td>8-8</td>
                      <td>2</td>
                      <td>27</td>
                      <td>7%</td>
                      <td>+3.50</td>
                      <td>£977,562</td>
                      <td>1,363,927</td>
                    </tr>
                    <tr>
                      <td>Miss Sophie Smith</td>
                      <td>8-11</td>
                      <td>2</td>
                      <td>27</td>
                      <td>7%</td>
                      <td>16.50</td>
                      <td>£6,301</td>
                      <td>15,364</td>
                    </tr>
                    <tr>
                      <td>Ger O'Neill</td>
                      <td>8-6</td>
                      <td>2</td>
                      <td>29</td>
                      <td>7%</td>
                      <td>9.00</td>
                      <td>£6,928</td>
                      <td>12,910</td>
                    </tr>
                    <tr>
                      <td>Miss Serena Brotherton</td>
                      <td>8-10</td>
                      <td>2</td>
                      <td>38</td>
                      <td>5%</td>
                      <td>21.00</td>
                      <td>£9,670</td>
                      <td>30,224</td>
                    </tr>
                    <tr>
                      <td>Grace McEntee</td>
                      <td>8-1</td>
                      <td>2</td>
                      <td>66</td>
                      <td>3%</td>
                      <td>44.00</td>
                      <td>£7,309</td>
                      <td>26,247</td>
                    </tr>
                    <tr>
                      <td>Mitch Godwin</td>
                      <td>8-6</td>
                      <td>2</td>
                      <td>71</td>
                      <td>3%</td>
                      <td>16.00</td>
                      <td>£7,504</td>
                      <td>27,140</td>
                    </tr>
                    <tr>
                      <td>Royston Ffrench</td>
                      <td>8-0</td>
                      <td>2</td>
                      <td>169</td>
                      <td>1%</td>
                      <td>36.00</td>
                      <td>£6,986</td>
                      <td>61,652</td>
                    </tr>
                    <tr>
                      <td>Sammy Jo Bell</td>
                      <td>11-5</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+5.00</td>
                      <td>£6,727</td>
                      <td>6,727</td>
                    </tr>
                    <tr>
                      <td>Mr T Hamilton</td>
                      <td>10-9</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+4.50</td>
                      <td>£9,358</td>
                      <td>9,358</td>
                    </tr>
                    <tr>
                      <td>Ben Jones</td>
                      <td>10-9</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+50.00</td>
                      <td>£2,994</td>
                      <td>2,994</td>
                    </tr>
                    <tr>
                      <td>Karen Kenny</td>
                      <td>7-11</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+12.00</td>
                      <td>£2,975</td>
                      <td>2,975</td>
                    </tr>
                    <tr>
                      <td>Mr Michael Legg</td>
                      <td>11-9</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+4.00</td>
                      <td>£4,679</td>
                      <td>4,679</td>
                    </tr>
                    <tr>
                      <td>Miss Jessica Bedi</td>
                      <td>9-1</td>
                      <td>1</td>
                      <td>2</td>
                      <td>50%</td>
                      <td>+7.00</td>
                      <td>£2,994</td>
                      <td>3,956</td>
                    </tr>
                    <tr>
                      <td>Mr Matthew Johnson</td>
                      <td>9-12</td>
                      <td>1</td>
                      <td>2</td>
                      <td>50%</td>
                      <td>+15.00</td>
                      <td>£2,994</td>
                      <td>3,394</td>
                    </tr>
                    <tr>
                      <td>Joshua Moore</td>
                      <td>10-8</td>
                      <td>1</td>
                      <td>2</td>
                      <td>50%</td>
                      <td>+7.00</td>
                      <td>£15,562</td>
                      <td>17,872</td>
                    </tr>
                    <tr>
                      <td>Oisin Orr</td>
                      <td>8-10</td>
                      <td>1</td>
                      <td>2</td>
                      <td>50%</td>
                      <td>+2.50</td>
                      <td>£9,962</td>
                      <td>10,262</td>
                    </tr>
                    <tr>
                      <td>Mr M A Galligan</td>
                      <td>10-6</td>
                      <td>1</td>
                      <td>3</td>
                      <td>33%</td>
                      <td>+1.50</td>
                      <td>£3,306</td>
                      <td>3,906</td>
                    </tr>
                    <tr>
                      <td>Charlotte Bennett</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>4</td>
                      <td>25%</td>
                      <td>+9.00</td>
                      <td>£4,398</td>
                      <td>4,698</td>
                    </tr>
                    <tr>
                      <td>Mr Charles Clover</td>
                      <td>10-0</td>
                      <td>1</td>
                      <td>4</td>
                      <td>25%</td>
                      <td>+22.00</td>
                      <td>£3,618</td>
                      <td>5,015</td>
                    </tr>
                    <tr>
                      <td>Poppy Fielding</td>
                      <td>8-7</td>
                      <td>1</td>
                      <td>4</td>
                      <td>25%</td>
                      <td>+17.00</td>
                      <td>£3,881</td>
                      <td>4,902</td>
                    </tr>
                    <tr>
                      <td>Miss Abbie McCain</td>
                      <td>10-4</td>
                      <td>1</td>
                      <td>4</td>
                      <td>25%</td>
                      <td>+22.00</td>
                      <td>£2,994</td>
                      <td>2,994</td>
                    </tr>
                    <tr>
                      <td>Lorenzo Atzori</td>
                      <td>8-8</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td></td>
                      <td>£3,428</td>
                      <td>4,798</td>
                    </tr>
                    <tr>
                      <td>Filip Minarik</td>
                      <td>8-3</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td>+1.50</td>
                      <td>£29,508</td>
                      <td>42,936</td>
                    </tr>
                    <tr>
                      <td>Marie Perrault</td>
                      <td>8-13</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td>+8.00</td>
                      <td>£4,528</td>
                      <td>6,175</td>
                    </tr>
                    <tr>
                      <td>Miss Megan Trainor</td>
                      <td>9-2</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td>+96.00</td>
                      <td>£3,606</td>
                      <td>4,306</td>
                    </tr>
                    <tr>
                      <td>Mark Zahra</td>
                      <td>8-10</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td>+3.00</td>
                      <td>£29,508</td>
                      <td>54,456</td>
                    </tr>
                    <tr>
                      <td>Mickael Barzalona</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>6</td>
                      <td>17%</td>
                      <td>2.25</td>
                      <td>£155,952</td>
                      <td>205,080</td>
                    </tr>
                    <tr>
                      <td>Miss Katy Brooks</td>
                      <td>9-7</td>
                      <td>1</td>
                      <td>6</td>
                      <td>17%</td>
                      <td>+3.00</td>
                      <td>£2,682</td>
                      <td>5,623</td>
                    </tr>
                    <tr>
                      <td>D M Simmonson</td>
                      <td>8-3</td>
                      <td>1</td>
                      <td>6</td>
                      <td>17%</td>
                      <td>+3.00</td>
                      <td>£3,234</td>
                      <td>4,854</td>
                    </tr>
                    <tr>
                      <td>Mr Philip Thomas</td>
                      <td>10-0</td>
                      <td>1</td>
                      <td>6</td>
                      <td>17%</td>
                      <td>1.50</td>
                      <td>£2,682</td>
                      <td>6,273</td>
                    </tr>
                    <tr>
                      <td>Gianluca Sanna</td>
                      <td>8-6</td>
                      <td>1</td>
                      <td>7</td>
                      <td>14%</td>
                      <td>1.00</td>
                      <td>£4,851</td>
                      <td>5,151</td>
                    </tr>
                    <tr>
                      <td>Aiden Blakemore</td>
                      <td>8-11</td>
                      <td>1</td>
                      <td>8</td>
                      <td>13%</td>
                      <td>3.00</td>
                      <td>£2,975</td>
                      <td>4,536</td>
                    </tr>
                    <tr>
                      <td>Tristan Price</td>
                      <td>8-4</td>
                      <td>1</td>
                      <td>8</td>
                      <td>13%</td>
                      <td>3.50</td>
                      <td>£4,851</td>
                      <td>6,402</td>
                    </tr>
                    <tr>
                      <td>Miss Catherine Walton</td>
                      <td>9-2</td>
                      <td>1</td>
                      <td>8</td>
                      <td>13%</td>
                      <td>+5.00</td>
                      <td>£2,682</td>
                      <td>3,642</td>
                    </tr>
                    <tr>
                      <td>Pierre-Charles Boudot</td>
                      <td>8-9</td>
                      <td>1</td>
                      <td>9</td>
                      <td>11%</td>
                      <td>+12.00</td>
                      <td>£283,550</td>
                      <td>925,182</td>
                    </tr>
                    <tr>
                      <td>Elinor Jones</td>
                      <td>8-0</td>
                      <td>1</td>
                      <td>9</td>
                      <td>11%</td>
                      <td>3.50</td>
                      <td>£2,781</td>
                      <td>5,947</td>
                    </tr>
                    <tr>
                      <td>Mr Matthew Ennis</td>
                      <td>9-13</td>
                      <td>1</td>
                      <td>10</td>
                      <td>10%</td>
                      <td>8.00</td>
                      <td>£2,994</td>
                      <td>5,755</td>
                    </tr>
                    <tr>
                      <td>Aiden Smithies</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>10</td>
                      <td>10%</td>
                      <td>2.00</td>
                      <td>£3,105</td>
                      <td>5,132</td>
                    </tr>
                    <tr>
                      <td>Miss Amie Waugh</td>
                      <td>8-9</td>
                      <td>1</td>
                      <td>10</td>
                      <td>10%</td>
                      <td>+16.00</td>
                      <td>£2,950</td>
                      <td>5,604</td>
                    </tr>
                    <tr>
                      <td>Joe Bradnam</td>
                      <td>8-2</td>
                      <td>1</td>
                      <td>11</td>
                      <td>9%</td>
                      <td>4.50</td>
                      <td>£3,752</td>
                      <td>6,855</td>
                    </tr>
                    <tr>
                      <td>Antonio Fresu</td>
                      <td>8-4</td>
                      <td>1</td>
                      <td>11</td>
                      <td>9%</td>
                      <td>1.00</td>
                      <td>£12,450</td>
                      <td>30,843</td>
                    </tr>
                    <tr>
                      <td>Miss Jessica Llewellyn</td>
                      <td>8-9</td>
                      <td>1</td>
                      <td>11</td>
                      <td>9%</td>
                      <td>+6.00</td>
                      <td>£5,927</td>
                      <td>10,109</td>
                    </tr>
                    <tr>
                      <td>Miss Antonia Peck</td>
                      <td>8-11</td>
                      <td>1</td>
                      <td>11</td>
                      <td>9%</td>
                      <td>+15.00</td>
                      <td>£3,244</td>
                      <td>5,744</td>
                    </tr>
                    <tr>
                      <td>Louis Garoghan</td>
                      <td>8-0</td>
                      <td>1</td>
                      <td>13</td>
                      <td>8%</td>
                      <td>+8.00</td>
                      <td>£2,781</td>
                      <td>5,842</td>
                    </tr>
                    <tr>
                      <td>Miss Hannah Welch</td>
                      <td>9-4</td>
                      <td>1</td>
                      <td>13</td>
                      <td>8%</td>
                      <td>5.50</td>
                      <td>£2,994</td>
                      <td>7,490</td>
                    </tr>
                    <tr>
                      <td>George Buckell</td>
                      <td>8-8</td>
                      <td>1</td>
                      <td>14</td>
                      <td>7%</td>
                      <td>6.50</td>
                      <td>£3,105</td>
                      <td>7,209</td>
                    </tr>
                    <tr>
                      <td>Tim Clark</td>
                      <td>8-3</td>
                      <td>1</td>
                      <td>14</td>
                      <td>7%</td>
                      <td>2.00</td>
                      <td>£9,703</td>
                      <td>11,303</td>
                    </tr>
                    <tr>
                      <td>Shane Foley</td>
                      <td>8-7</td>
                      <td>1</td>
                      <td>15</td>
                      <td>7%</td>
                      <td>+2.00</td>
                      <td>£165,355</td>
                      <td>231,929</td>
                    </tr>
                    <tr>
                      <td>Luke Bacon</td>
                      <td>7-10</td>
                      <td>1</td>
                      <td>18</td>
                      <td>6%</td>
                      <td>13.67</td>
                      <td>£2,781</td>
                      <td>8,152</td>
                    </tr>
                    <tr>
                      <td>Miss Emily Bullock</td>
                      <td>9-3</td>
                      <td>1</td>
                      <td>18</td>
                      <td>6%</td>
                      <td>13.50</td>
                      <td>£3,992</td>
                      <td>14,572</td>
                    </tr>
                    <tr>
                      <td>Tadhg O'Shea</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>21</td>
                      <td>5%</td>
                      <td>+13.00</td>
                      <td>£4,787</td>
                      <td>29,068</td>
                    </tr>
                    <tr>
                      <td>Mr Simon Walker</td>
                      <td>10-4</td>
                      <td>1</td>
                      <td>22</td>
                      <td>5%</td>
                      <td>18.50</td>
                      <td>£7,486</td>
                      <td>18,529</td>
                    </tr>
                    <tr>
                      <td>Morgan Cole</td>
                      <td>7-11</td>
                      <td>1</td>
                      <td>23</td>
                      <td>4%</td>
                      <td>18.67</td>
                      <td>£6,469</td>
                      <td>9,893</td>
                    </tr>
                    <tr>
                      <td>Michael Stainton</td>
                      <td>8-11</td>
                      <td>1</td>
                      <td>23</td>
                      <td>4%</td>
                      <td>+28.00</td>
                      <td>£3,428</td>
                      <td>7,360</td>
                    </tr>
                    <tr>
                      <td>Jessica Cooley</td>
                      <td>8-4</td>
                      <td>1</td>
                      <td>24</td>
                      <td>4%</td>
                      <td>7.00</td>
                      <td>£4,851</td>
                      <td>16,061</td>
                    </tr>
                    <tr>
                      <td>Miss Emily Easterby</td>
                      <td>9-9</td>
                      <td>1</td>
                      <td>25</td>
                      <td>4%</td>
                      <td>20.00</td>
                      <td>£4,204</td>
                      <td>14,292</td>
                    </tr>
                    <tr>
                      <td>Danny Brock</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>34</td>
                      <td>3%</td>
                      <td>23.00</td>
                      <td>£3,105</td>
                      <td>8,976</td>
                    </tr>
                    <tr>
                      <td>George Rooke</td>
                      <td>7-9</td>
                      <td>1</td>
                      <td>48</td>
                      <td>2%</td>
                      <td>40.50</td>
                      <td>£3,428</td>
                      <td>19,542</td>
                    </tr>
                    <tr>
                      <td>Noel Garbutt</td>
                      <td>7-11</td>
                      <td>1</td>
                      <td>56</td>
                      <td>2%</td>
                      <td>35.00</td>
                      <td>£3,428</td>
                      <td>19,486</td>
                    </tr>
                    <tr>
                      <td>Fergus Sweeney</td>
                      <td>8-8</td>
                      <td>1</td>
                      <td>110</td>
                      <td>1%</td>
                      <td>104.50</td>
                      <td>£7,762</td>
                      <td>38,101</td>
                    </tr>
                    <tr>
                      <td>Philip Prince</td>
                      <td>8-5</td>
                      <td>0</td>
                      <td>43</td>
                      <td>%</td>
                      <td>43.00</td>
                      <td>£</td>
                      <td>11,019</td>
                    </tr>
                    <tr>
                      <td>Paddy Bradley</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>39</td>
                      <td>%</td>
                      <td>39.00</td>
                      <td>£</td>
                      <td>8,962</td>
                    </tr>
                    <tr>
                      <td>Adrian McCarthy</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>36</td>
                      <td>%</td>
                      <td>36.00</td>
                      <td>£</td>
                      <td>15,816</td>
                    </tr>
                    <tr>
                      <td>Ray Dawson</td>
                      <td>8-2</td>
                      <td>0</td>
                      <td>35</td>
                      <td>%</td>
                      <td>35.00</td>
                      <td>£</td>
                      <td>9,221</td>
                    </tr>
                    <tr>
                      <td>Racheal Kneller</td>
                      <td>7-11</td>
                      <td>0</td>
                      <td>27</td>
                      <td>%</td>
                      <td>27.00</td>
                      <td>£</td>
                      <td>3,861</td>
                    </tr>
                    <tr>
                      <td>Josh Quinn</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>26</td>
                      <td>%</td>
                      <td>26.00</td>
                      <td>£</td>
                      <td>7,427</td>
                    </tr>
                    <tr>
                      <td>Gary Mahon</td>
                      <td>8-10</td>
                      <td>0</td>
                      <td>23</td>
                      <td>%</td>
                      <td>23.00</td>
                      <td>£</td>
                      <td>6,419</td>
                    </tr>
                    <tr>
                      <td>Ryan Powell</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>23</td>
                      <td>%</td>
                      <td>23.00</td>
                      <td>£</td>
                      <td>6,523</td>
                    </tr>
                    <tr>
                      <td>Nick Barratt-Atkin</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>22</td>
                      <td>%</td>
                      <td>22.00</td>
                      <td>£</td>
                      <td>7,750</td>
                    </tr>
                    <tr>
                      <td>Owen Payton</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>20</td>
                      <td>%</td>
                      <td>20.00</td>
                      <td>£</td>
                      <td>9,013</td>
                    </tr>
                    <tr>
                      <td>Russell Harris</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>18</td>
                      <td>%</td>
                      <td>18.00</td>
                      <td>£</td>
                      <td>4,283</td>
                    </tr>
                    <tr>
                      <td>Laura Pearson</td>
                      <td>7-10</td>
                      <td>0</td>
                      <td>18</td>
                      <td>%</td>
                      <td>18.00</td>
                      <td>£</td>
                      <td>3,642</td>
                    </tr>
                    <tr>
                      <td>Keelan Baker</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>17</td>
                      <td>%</td>
                      <td>17.00</td>
                      <td>£</td>
                      <td>1,781</td>
                    </tr>
                    <tr>
                      <td>Robert Dodsworth</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>17</td>
                      <td>%</td>
                      <td>17.00</td>
                      <td>£</td>
                      <td>4,031</td>
                    </tr>
                    <tr>
                      <td>Katherine Begley</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>15</td>
                      <td>%</td>
                      <td>15.00</td>
                      <td>£</td>
                      <td>3,220</td>
                    </tr>
                    <tr>
                      <td>W J Lee</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>15</td>
                      <td>%</td>
                      <td>15.00</td>
                      <td>£</td>
                      <td>76,176</td>
                    </tr>
                    <tr>
                      <td>James McDonald</td>
                      <td>8-8</td>
                      <td>0</td>
                      <td>15</td>
                      <td>%</td>
                      <td>15.00</td>
                      <td>£</td>
                      <td>62,818</td>
                    </tr>
                    <tr>
                      <td>R P Walsh</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>14</td>
                      <td>%</td>
                      <td>14.00</td>
                      <td>£</td>
                      <td>2,980</td>
                    </tr>
                    <tr>
                      <td>Michael Pitt</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>13</td>
                      <td>%</td>
                      <td>13.00</td>
                      <td>£</td>
                      <td>2,100</td>
                    </tr>
                    <tr>
                      <td>Ronan Whelan</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>12</td>
                      <td>%</td>
                      <td>12.00</td>
                      <td>£</td>
                      <td>6,855</td>
                    </tr>
                    <tr>
                      <td>Jessica Anderson</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>11</td>
                      <td>%</td>
                      <td>11.00</td>
                      <td>£</td>
                      <td>2,724</td>
                    </tr>
                    <tr>
                      <td>Sara Del Fabbro</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>11</td>
                      <td>%</td>
                      <td>11.00</td>
                      <td>£</td>
                      <td>5,427</td>
                    </tr>
                    <tr>
                      <td>Miss Michelle Mullineaux</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>11</td>
                      <td>%</td>
                      <td>11.00</td>
                      <td>£</td>
                      <td>3,583</td>
                    </tr>
                    <tr>
                      <td>Mr George Eddery</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>10</td>
                      <td>%</td>
                      <td>10.00</td>
                      <td>£</td>
                      <td>3,148</td>
                    </tr>
                    <tr>
                      <td>Christophe Soumillon</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>10</td>
                      <td>%</td>
                      <td>10.00</td>
                      <td>£</td>
                      <td>84,029</td>
                    </tr>
                    <tr>
                      <td>Jacob Clark</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>9</td>
                      <td>%</td>
                      <td>9.00</td>
                      <td>£</td>
                      <td>1,861</td>
                    </tr>
                    <tr>
                      <td>Rob J Fitzpatrick</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>9</td>
                      <td>%</td>
                      <td>9.00</td>
                      <td>£</td>
                      <td>1,657</td>
                    </tr>
                    <tr>
                      <td>Emma Taff</td>
                      <td>8-5</td>
                      <td>0</td>
                      <td>9</td>
                      <td>%</td>
                      <td>9.00</td>
                      <td>£</td>
                      <td>2,952</td>
                    </tr>
                    <tr>
                      <td>Lucy Alexander</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>8</td>
                      <td>%</td>
                      <td>8.00</td>
                      <td>£</td>
                      <td>1,300</td>
                    </tr>
                    <tr>
                      <td>Gina Mangan</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>8</td>
                      <td>%</td>
                      <td>8.00</td>
                      <td>£</td>
                      <td>2,174</td>
                    </tr>
                    <tr>
                      <td>Mr Ross Birkett</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>2,389</td>
                    </tr>
                    <tr>
                      <td>Gary Halpin</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>7,450</td>
                    </tr>
                    <tr>
                      <td>Miss Belinda Johnson</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>1,500</td>
                    </tr>
                    <tr>
                      <td>Leigh Roche</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>1,076</td>
                    </tr>
                    <tr>
                      <td>Mr Connor Wood</td>
                      <td>9-3</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>2,621</td>
                    </tr>
                    <tr>
                      <td>Ella Boardman</td>
                      <td>7-12</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Robbie Colgan</td>
                      <td>8-10</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>114,095</td>
                    </tr>
                    <tr>
                      <td>Jack Dinsmore</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>1,400</td>
                    </tr>
                    <tr>
                      <td>Kevin Lundie</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>1,377</td>
                    </tr>
                    <tr>
                      <td>Mollie Phillips</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>1,400</td>
                    </tr>
                    <tr>
                      <td>Aidan Redpath</td>
                      <td>7-12</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>1,661</td>
                    </tr>
                    <tr>
                      <td>P B Beggy</td>
                      <td>8-12</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>59,581</td>
                    </tr>
                    <tr>
                      <td>Nanako Fujita</td>
                      <td>7-10</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>10,620</td>
                    </tr>
                    <tr>
                      <td>Miss Alice Haynes</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>1,928</td>
                    </tr>
                    <tr>
                      <td>Miss Emma Jack</td>
                      <td>9-6</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Jamie Kah</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>18,000</td>
                    </tr>
                    <tr>
                      <td>Yuga Kawada</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>16,968</td>
                    </tr>
                    <tr>
                      <td>Mr Aidan Macdonald</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>1,500</td>
                    </tr>
                    <tr>
                      <td>Mr Henry Newcombe</td>
                      <td>9-13</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Brendan Powell</td>
                      <td>9-3</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>927</td>
                    </tr>
                    <tr>
                      <td>Miss Rachel Taylor</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>1,325</td>
                    </tr>
                    <tr>
                      <td>Adrie de Vries</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>12,684</td>
                    </tr>
                    <tr>
                      <td>Miss Sophie Coll</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>2,016</td>
                    </tr>
                    <tr>
                      <td>Miss Charlotte Crane</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Miss Chloe Dods</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,344</td>
                    </tr>
                    <tr>
                      <td>Mr Alex Edwards</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>2,567</td>
                    </tr>
                    <tr>
                      <td>Miss Julia Engstrom</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,057</td>
                    </tr>
                    <tr>
                      <td>Miss Jessica Gillam</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,200</td>
                    </tr>
                    <tr>
                      <td>Miss Paige Hopper</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>464</td>
                    </tr>
                    <tr>
                      <td>Rosie Jessop</td>
                      <td>8-2</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>2,764</td>
                    </tr>
                    <tr>
                      <td>Jamie Jones</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Mr Finbar Mulrine</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Mrs Dawn Scott</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Oliver Stammers</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>886</td>
                    </tr>
                    <tr>
                      <td>Miss Camilla Swift</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,115</td>
                    </tr>
                    <tr>
                      <td>Miss Millie Wonnacott</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,300</td>
                    </tr>
                    <tr>
                      <td>Mr Patrick Barlow</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Alice Bond</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Mr Alex Chadwick</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>1,158</td>
                    </tr>
                    <tr>
                      <td>Miss Alyson Deniel</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Mr Craig Dowson</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>870</td>
                    </tr>
                    <tr>
                      <td>Mr Sam Feilden</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>715</td>
                    </tr>
                    <tr>
                      <td>Tyler Gaffalione</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Liam Hamblett</td>
                      <td>9-3</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Antoine Hamelin</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Ryan Holmes</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>1,721</td>
                    </tr>
                    <tr>
                      <td>Cameron Iles</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>481</td>
                    </tr>
                    <tr>
                      <td>Mr Ciaran Jones</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Mr James King</td>
                      <td>10-11</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>1,118</td>
                    </tr>
                    <tr>
                      <td>Miss Georgia King</td>
                      <td>9-3</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Owen Lewis</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Joseph Lyons</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>899</td>
                    </tr>
                    <tr>
                      <td>Miss Claudia Metaireau</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>3,089</td>
                    </tr>
                    <tr>
                      <td>Mr Thomas Miles</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Jamie Neild</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Siobhan Rutledge</td>
                      <td>7-8</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>654</td>
                    </tr>
                    <tr>
                      <td>Mr Joshua Scott</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>464</td>
                    </tr>
                    <tr>
                      <td>Mr Nathan Seery</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>963</td>
                    </tr>
                    <tr>
                      <td>Mr Hakan Sensoy</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Maisie Sharp</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Miss Suzannah Stevens</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>2,776</td>
                    </tr>
                    <tr>
                      <td>John R Velazquez</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>23,650</td>
                    </tr>
                    <tr>
                      <td>Miss Kelly Adams</td>
                      <td>9-12</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Kerryanne Alexander</td>
                      <td>9-13</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Leighton Aspell</td>
                      <td>11-6</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,154</td>
                    </tr>
                    <tr>
                      <td>Harry Bannister</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Minty Bloss</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Matilda Blundell</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Miss Becky Brisbourne</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Michelle Bryant</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Rory Cleary</td>
                      <td>8-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Ben Coen</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Miss Helen Cuthbert</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Rachel Davies</td>
                      <td>9-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Sally Davison</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Sophie Dods</td>
                      <td>9-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>936</td>
                    </tr>
                    <tr>
                      <td>Mr Alex Ferguson</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,257</td>
                    </tr>
                    <tr>
                      <td>Miss Megan Fox</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,118</td>
                    </tr>
                    <tr>
                      <td>Page Fuller</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Mr Thomas Greenwood</td>
                      <td>10-10</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>558</td>
                    </tr>
                    <tr>
                      <td>Mr Marcus Haigh</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>483</td>
                    </tr>
                    <tr>
                      <td>Mr Sean Hawkins</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Sam Hitchcott</td>
                      <td>8-5</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Rosie Howarth</td>
                      <td>9-10</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Brian Hughes</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>577</td>
                    </tr>
                    <tr>
                      <td>Miss Rachel Huskisson</td>
                      <td>9-13</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Robert Law-Eadie</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Killian Leonard</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Miss Rosie Margarson</td>
                      <td>8-12</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>464</td>
                    </tr>
                    <tr>
                      <td>Conor Maxwell</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>344</td>
                    </tr>
                    <tr>
                      <td>Mr Guy Mitchell</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Shariq Mohd</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Ms L O'Neill</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,208</td>
                    </tr>
                    <tr>
                      <td>Miss Jennifer Pahlman</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Lilly Pinchin</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>875</td>
                    </tr>
                    <tr>
                      <td>Mr Bradley Roberts</td>
                      <td>9-10</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,287</td>
                    </tr>
                    <tr>
                      <td>Gavin Ryan</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Victoria Sanchez</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Nynke Schilder</td>
                      <td>9-12</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>800</td>
                    </tr>
                    <tr>
                      <td>Kayleigh Stephens</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>2,160</td>
                    </tr>
                    <tr>
                      <td>Miss Arabella Tucker</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Tamby Welch</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Sarah Williams</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Kit Alexander</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Gina Andrews</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,451</td>
                    </tr>
                    <tr>
                      <td>Mr Philip Armson</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Theo Bachelot</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>12,900</td>
                    </tr>
                    <tr>
                      <td>Miss Chelsea Banham</td>
                      <td>10-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>928</td>
                    </tr>
                    <tr>
                      <td>Gary Bardwell</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Colin Bolger</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Gaia Boni</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>James Bowen</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Ben Bromley</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Henry Brooke</td>
                      <td>10-8</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Oakley Brown</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Matt Brown</td>
                      <td>10-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>304</td>
                    </tr>
                    <tr>
                      <td>Imogen Carter</td>
                      <td>8-12</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,116</td>
                    </tr>
                    <tr>
                      <td>Bryan Carver</td>
                      <td>11-1</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Alain Cawley</td>
                      <td>11-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>2,330</td>
                    </tr>
                    <tr>
                      <td>Vincent Cheminaud</td>
                      <td>8-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Harry Cobden</td>
                      <td>11-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr J J Codd</td>
                      <td>11-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,160</td>
                    </tr>
                    <tr>
                      <td>Aidan Coleman</td>
                      <td>10-12</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Pam Du Crocq</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr John Dawson</td>
                      <td>11-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Oliver Daykin</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>483</td>
                    </tr>
                    <tr>
                      <td>Cristian Demuro</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Philip Donovan</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Joe Doyle</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>15,686</td>
                    </tr>
                    <tr>
                      <td>Mr J Dunne</td>
                      <td>10-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>928</td>
                    </tr>
                    <tr>
                      <td>Vlad Duric</td>
                      <td>9-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Shae Edwards</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Kieren Fallon</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>500</td>
                    </tr>
                    <tr>
                      <td>Noel Fehily</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>2,002</td>
                    </tr>
                    <tr>
                      <td>Mr Matthew Fielding</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Bryony Frost</td>
                      <td>10-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mark Gallagher</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,053</td>
                    </tr>
                    <tr>
                      <td>Miss Alex Garven</td>
                      <td>9-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Graham Gilbertson</td>
                      <td>10-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss C L Goodwin</td>
                      <td>10-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Mr George Gorman</td>
                      <td>10-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Maxime Guyon</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>14,492</td>
                    </tr>
                    <tr>
                      <td>Jamie Hamilton</td>
                      <td>10-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>4,660</td>
                    </tr>
                    <tr>
                      <td>Brian Harding</td>
                      <td>11-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Paddy Harnett</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,443</td>
                    </tr>
                    <tr>
                      <td>Luke Harvey</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Tyler Heard</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Dawn Henry</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Conor Hoban</td>
                      <td>7-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Michael Hussey</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Daryl Jacob</td>
                      <td>11-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Barry Keniry</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Danny Kerr</td>
                      <td>10-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Connor King</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>582</td>
                    </tr>
                    <tr>
                      <td>Harriett Lees</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Kai Lenihan</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Jamie Mackay</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Kevin Manning</td>
                      <td>8-8</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Andrew McBride</td>
                      <td>9-13</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Nell McCann</td>
                      <td>10-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Nathan McCann</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>473</td>
                    </tr>
                    <tr>
                      <td>N G McCullagh</td>
                      <td>8-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>65,240</td>
                    </tr>
                    <tr>
                      <td>Derek McGaffin</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr L J McGuinness</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mikey Melia</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Marc Monaghan</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>10,105</td>
                    </tr>
                    <tr>
                      <td>Ms H Mooney</td>
                      <td>8-12</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Stephen Mooney</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>924</td>
                    </tr>
                    <tr>
                      <td>Timmy Murphy</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Adrian Nicholls</td>
                      <td>11-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,000</td>
                    </tr>
                    <tr>
                      <td>Miss A B O'Connor</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>968</td>
                    </tr>
                    <tr>
                      <td>Mr Anthony O'Neill</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Erika Parkinson</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>481</td>
                    </tr>
                    <tr>
                      <td>Ollie Pears</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Will Pettis</td>
                      <td>10-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Mr Charlie Pike</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>464</td>
                    </tr>
                    <tr>
                      <td>Charlie Poste</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mrs Charlotte Pownall</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Jack Quinlan</td>
                      <td>11-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Niall Reynolds</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Joel Rosario</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Nick Scholfield</td>
                      <td>10-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Tom Scudamore</td>
                      <td>10-13</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>292</td>
                    </tr>
                    <tr>
                      <td>Miss Rachel Sharpe</td>
                      <td>10-13</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Victoria Smith</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Danielle Smith</td>
                      <td>9-12</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>512</td>
                    </tr>
                    <tr>
                      <td>Mr Liam Spencer</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Lewis Stones</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Yutaka Take</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>10,125</td>
                    </tr>
                    <tr>
                      <td>Caitlin Taylor</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr J Teal</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,450</td>
                    </tr>
                    <tr>
                      <td>Mr William Thirlby</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Andrew Thornton</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Andrew Tinkler</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Sam Twiston-Davies</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Dr Misha Voikhansky</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Adam Wedge</td>
                      <td>11-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Kielan Woods</td>
                      <td>10-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,165</td>
                    </tr>
                    <tr>
                      <td>Tabitha Worsley</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <td colspan="8">
                        <a href="#" class="championship-table__more">More...</a>
                      </td>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="table-responsive">
                  <table id="jockeyTable" class="championship-table">
                    <thead>
                    <tr>
                      <th>Jockey</th>
                      <th>Min Weight</th>
                      <th>Wins</th>
                      <th>Rides</th>
                      <th>Strike Rate</th>
                      <th>Level Stake</th>
                      <th>Win Prize</th>
                      <th>Total Prize</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Oisin Murphy</td>
                      <td>8-7</td>
                      <td>168</td>
                      <td>860</td>
                      <td>20%</td>
                      <td>45.01</td>
                      <td>£2,388,826</td>
                      <td>3,790,721</td>
                    </tr>
                    <tr>
                      <td>Daniel Tudhope</td>
                      <td>8-10</td>
                      <td>133</td>
                      <td>636</td>
                      <td>21%</td>
                      <td>+9.32</td>
                      <td>£1,631,015</td>
                      <td>2,635,815</td>
                    </tr>
                    <tr>
                      <td>Jim Crowley</td>
                      <td>8-7</td>
                      <td>99</td>
                      <td>429</td>
                      <td>23%</td>
                      <td>+29.76</td>
                      <td>£2,057,618</td>
                      <td>2,856,416</td>
                    </tr>
                    <tr>
                      <td>Tom Marquand</td>
                      <td>8-7</td>
                      <td>90</td>
                      <td>635</td>
                      <td>14%</td>
                      <td>+81.95</td>
                      <td>£646,811</td>
                      <td>1,126,630</td>
                    </tr>
                    <tr>
                      <td>P J McDonald</td>
                      <td>8-5</td>
                      <td>82</td>
                      <td>553</td>
                      <td>15%</td>
                      <td>29.94</td>
                      <td>£822,669</td>
                      <td>1,445,040</td>
                    </tr>
                    <tr>
                      <td>Ben Curtis</td>
                      <td>8-4</td>
                      <td>82</td>
                      <td>585</td>
                      <td>14%</td>
                      <td>30.42</td>
                      <td>£749,940</td>
                      <td>1,187,475</td>
                    </tr>
                    <tr>
                      <td>James Doyle</td>
                      <td>8-11</td>
                      <td>80</td>
                      <td>400</td>
                      <td>20%</td>
                      <td>32.59</td>
                      <td>£2,057,242</td>
                      <td>3,743,913</td>
                    </tr>
                    <tr>
                      <td>Silvestre De Sousa</td>
                      <td>8-1</td>
                      <td>79</td>
                      <td>461</td>
                      <td>17%</td>
                      <td>44.63</td>
                      <td>£1,592,211</td>
                      <td>2,725,650</td>
                    </tr>
                    <tr>
                      <td>Jason Watson</td>
                      <td>8-6</td>
                      <td>77</td>
                      <td>520</td>
                      <td>15%</td>
                      <td>+13.52</td>
                      <td>£1,127,345</td>
                      <td>1,516,975</td>
                    </tr>
                    <tr>
                      <td>Harry Bentley</td>
                      <td>8-4</td>
                      <td>71</td>
                      <td>498</td>
                      <td>14%</td>
                      <td>87.85</td>
                      <td>£814,079</td>
                      <td>1,365,815</td>
                    </tr>
                    <tr>
                      <td>Joe Fanning</td>
                      <td>8-0</td>
                      <td>66</td>
                      <td>408</td>
                      <td>16%</td>
                      <td>41.00</td>
                      <td>£796,287</td>
                      <td>1,142,185</td>
                    </tr>
                    <tr>
                      <td>David Allan</td>
                      <td>8-8</td>
                      <td>66</td>
                      <td>503</td>
                      <td>13%</td>
                      <td>114.41</td>
                      <td>£528,431</td>
                      <td>819,398</td>
                    </tr>
                    <tr>
                      <td>Hollie Doyle</td>
                      <td>8-0</td>
                      <td>63</td>
                      <td>447</td>
                      <td>14%</td>
                      <td>52.63</td>
                      <td>£371,293</td>
                      <td>709,337</td>
                    </tr>
                    <tr>
                      <td>Franny Norton</td>
                      <td>8-2</td>
                      <td>61</td>
                      <td>476</td>
                      <td>13%</td>
                      <td>213.93</td>
                      <td>£675,945</td>
                      <td>1,283,537</td>
                    </tr>
                    <tr>
                      <td>Adam Kirby</td>
                      <td>9-0</td>
                      <td>60</td>
                      <td>369</td>
                      <td>16%</td>
                      <td>57.75</td>
                      <td>£800,358</td>
                      <td>1,387,328</td>
                    </tr>
                    <tr>
                      <td>Jack Mitchell</td>
                      <td>8-8</td>
                      <td>59</td>
                      <td>333</td>
                      <td>18%</td>
                      <td>79.26</td>
                      <td>£300,695</td>
                      <td>467,581</td>
                    </tr>
                    <tr>
                      <td>Paul Hanagan</td>
                      <td>8-5</td>
                      <td>58</td>
                      <td>450</td>
                      <td>13%</td>
                      <td>58.31</td>
                      <td>£495,789</td>
                      <td>865,886</td>
                    </tr>
                    <tr>
                      <td>David Probert</td>
                      <td>8-6</td>
                      <td>58</td>
                      <td>627</td>
                      <td>9%</td>
                      <td>99.45</td>
                      <td>£340,805</td>
                      <td>676,139</td>
                    </tr>
                    <tr>
                      <td>Robert Havlin</td>
                      <td>8-7</td>
                      <td>55</td>
                      <td>370</td>
                      <td>15%</td>
                      <td>155.65</td>
                      <td>£490,863</td>
                      <td>904,622</td>
                    </tr>
                    <tr>
                      <td>Jason Hart</td>
                      <td>8-7</td>
                      <td>53</td>
                      <td>416</td>
                      <td>13%</td>
                      <td>10.64</td>
                      <td>£422,753</td>
                      <td>709,922</td>
                    </tr>
                    <tr>
                      <td>Ryan Moore</td>
                      <td>8-6</td>
                      <td>52</td>
                      <td>355</td>
                      <td>15%</td>
                      <td>143.39</td>
                      <td>£2,395,706</td>
                      <td>4,767,821</td>
                    </tr>
                    <tr>
                      <td>Richard Kingscote</td>
                      <td>8-6</td>
                      <td>52</td>
                      <td>433</td>
                      <td>12%</td>
                      <td>169.94</td>
                      <td>£599,967</td>
                      <td>1,093,260</td>
                    </tr>
                    <tr>
                      <td>David Egan</td>
                      <td>8-0</td>
                      <td>52</td>
                      <td>518</td>
                      <td>10%</td>
                      <td>191.10</td>
                      <td>£445,113</td>
                      <td>938,761</td>
                    </tr>
                    <tr>
                      <td>Frankie Dettori</td>
                      <td>8-8</td>
                      <td>51</td>
                      <td>206</td>
                      <td>25%</td>
                      <td>24.65</td>
                      <td>£5,678,509</td>
                      <td>6,992,104</td>
                    </tr>
                    <tr>
                      <td>Graham Lee</td>
                      <td>8-8</td>
                      <td>51</td>
                      <td>447</td>
                      <td>11%</td>
                      <td>179.50</td>
                      <td>£272,207</td>
                      <td>464,756</td>
                    </tr>
                    <tr>
                      <td>Sean Levey</td>
                      <td>8-9</td>
                      <td>50</td>
                      <td>370</td>
                      <td>14%</td>
                      <td>27.84</td>
                      <td>£1,282,973</td>
                      <td>1,698,076</td>
                    </tr>
                    <tr>
                      <td>Cieren Fallon</td>
                      <td>8-0</td>
                      <td>50</td>
                      <td>413</td>
                      <td>12%</td>
                      <td>118.17</td>
                      <td>£347,277</td>
                      <td>769,663</td>
                    </tr>
                    <tr>
                      <td>Andrea Atzeni</td>
                      <td>8-5</td>
                      <td>49</td>
                      <td>358</td>
                      <td>14%</td>
                      <td>43.32</td>
                      <td>£1,164,434</td>
                      <td>1,943,122</td>
                    </tr>
                    <tr>
                      <td>Rossa Ryan</td>
                      <td>8-8</td>
                      <td>45</td>
                      <td>389</td>
                      <td>12%</td>
                      <td>104.48</td>
                      <td>£319,134</td>
                      <td>499,166</td>
                    </tr>
                    <tr>
                      <td>Luke Morris</td>
                      <td>8-0</td>
                      <td>45</td>
                      <td>544</td>
                      <td>8%</td>
                      <td>300.13</td>
                      <td>£268,291</td>
                      <td>557,327</td>
                    </tr>
                    <tr>
                      <td>Dane O'Neill</td>
                      <td>8-9</td>
                      <td>43</td>
                      <td>242</td>
                      <td>18%</td>
                      <td>40.61</td>
                      <td>£390,371</td>
                      <td>573,478</td>
                    </tr>
                    <tr>
                      <td>Sean Davis</td>
                      <td>7-11</td>
                      <td>43</td>
                      <td>518</td>
                      <td>8%</td>
                      <td>194.16</td>
                      <td>£228,773</td>
                      <td>442,467</td>
                    </tr>
                    <tr>
                      <td>Hector Crouch</td>
                      <td>8-8</td>
                      <td>42</td>
                      <td>295</td>
                      <td>14%</td>
                      <td>37.11</td>
                      <td>£255,697</td>
                      <td>391,483</td>
                    </tr>
                    <tr>
                      <td>Jamie Spencer</td>
                      <td>8-6</td>
                      <td>39</td>
                      <td>258</td>
                      <td>15%</td>
                      <td>57.45</td>
                      <td>£595,730</td>
                      <td>1,271,504</td>
                    </tr>
                    <tr>
                      <td>Kieran O'Neill</td>
                      <td>8-0</td>
                      <td>39</td>
                      <td>359</td>
                      <td>11%</td>
                      <td>+29.36</td>
                      <td>£252,543</td>
                      <td>382,800</td>
                    </tr>
                    <tr>
                      <td>Pat Dobbs</td>
                      <td>8-9</td>
                      <td>37</td>
                      <td>257</td>
                      <td>14%</td>
                      <td>+37.64</td>
                      <td>£485,826</td>
                      <td>761,560</td>
                    </tr>
                    <tr>
                      <td>Pat Cosgrave</td>
                      <td>8-8</td>
                      <td>37</td>
                      <td>282</td>
                      <td>13%</td>
                      <td>100.78</td>
                      <td>£186,177</td>
                      <td>333,896</td>
                    </tr>
                    <tr>
                      <td>Paul Mulrennan</td>
                      <td>8-11</td>
                      <td>37</td>
                      <td>424</td>
                      <td>9%</td>
                      <td>159.70</td>
                      <td>£272,759</td>
                      <td>596,025</td>
                    </tr>
                    <tr>
                      <td>Kevin Stott</td>
                      <td>8-9</td>
                      <td>36</td>
                      <td>305</td>
                      <td>12%</td>
                      <td>99.19</td>
                      <td>£267,899</td>
                      <td>452,574</td>
                    </tr>
                    <tr>
                      <td>Clifford Lee</td>
                      <td>8-6</td>
                      <td>33</td>
                      <td>221</td>
                      <td>15%</td>
                      <td>+2.85</td>
                      <td>£177,586</td>
                      <td>284,900</td>
                    </tr>
                    <tr>
                      <td>Harrison Shaw</td>
                      <td>8-3</td>
                      <td>33</td>
                      <td>228</td>
                      <td>14%</td>
                      <td>+8.74</td>
                      <td>£156,072</td>
                      <td>236,282</td>
                    </tr>
                    <tr>
                      <td>Tony Hamilton</td>
                      <td>8-9</td>
                      <td>33</td>
                      <td>298</td>
                      <td>11%</td>
                      <td>77.64</td>
                      <td>£292,649</td>
                      <td>507,407</td>
                    </tr>
                    <tr>
                      <td>Liam Keniry</td>
                      <td>8-9</td>
                      <td>33</td>
                      <td>347</td>
                      <td>10%</td>
                      <td>90.32</td>
                      <td>£231,142</td>
                      <td>346,517</td>
                    </tr>
                    <tr>
                      <td>Charles Bishop</td>
                      <td>8-9</td>
                      <td>31</td>
                      <td>359</td>
                      <td>9%</td>
                      <td>87.39</td>
                      <td>£203,525</td>
                      <td>458,867</td>
                    </tr>
                    <tr>
                      <td>Tom Eaves</td>
                      <td>8-8</td>
                      <td>30</td>
                      <td>401</td>
                      <td>7%</td>
                      <td>88.48</td>
                      <td>£217,114</td>
                      <td>444,367</td>
                    </tr>
                    <tr>
                      <td>Connor Beasley</td>
                      <td>8-5</td>
                      <td>29</td>
                      <td>247</td>
                      <td>12%</td>
                      <td>66.54</td>
                      <td>£297,964</td>
                      <td>433,890</td>
                    </tr>
                    <tr>
                      <td>James Sullivan</td>
                      <td>8-0</td>
                      <td>29</td>
                      <td>357</td>
                      <td>8%</td>
                      <td>73.45</td>
                      <td>£195,203</td>
                      <td>307,501</td>
                    </tr>
                    <tr>
                      <td>Josephine Gordon</td>
                      <td>8-0</td>
                      <td>28</td>
                      <td>288</td>
                      <td>10%</td>
                      <td>69.92</td>
                      <td>£135,464</td>
                      <td>272,316</td>
                    </tr>
                    <tr>
                      <td>Martin Dwyer</td>
                      <td>8-2</td>
                      <td>27</td>
                      <td>264</td>
                      <td>10%</td>
                      <td>+9.25</td>
                      <td>£206,512</td>
                      <td>352,175</td>
                    </tr>
                    <tr>
                      <td>Ben Robinson</td>
                      <td>8-5</td>
                      <td>27</td>
                      <td>289</td>
                      <td>9%</td>
                      <td>135.59</td>
                      <td>£132,223</td>
                      <td>260,466</td>
                    </tr>
                    <tr>
                      <td>Rob Hornby</td>
                      <td>8-6</td>
                      <td>27</td>
                      <td>357</td>
                      <td>8%</td>
                      <td>123.28</td>
                      <td>£344,345</td>
                      <td>552,690</td>
                    </tr>
                    <tr>
                      <td>Shane Kelly</td>
                      <td>8-7</td>
                      <td>27</td>
                      <td>422</td>
                      <td>6%</td>
                      <td>180.11</td>
                      <td>£157,601</td>
                      <td>333,632</td>
                    </tr>
                    <tr>
                      <td>William Buick</td>
                      <td>8-7</td>
                      <td>26</td>
                      <td>132</td>
                      <td>20%</td>
                      <td>43.95</td>
                      <td>£639,665</td>
                      <td>918,084</td>
                    </tr>
                    <tr>
                      <td>Stevie Donohoe</td>
                      <td>8-8</td>
                      <td>26</td>
                      <td>276</td>
                      <td>9%</td>
                      <td>93.53</td>
                      <td>£199,769</td>
                      <td>335,184</td>
                    </tr>
                    <tr>
                      <td>Shane Gray</td>
                      <td>8-2</td>
                      <td>26</td>
                      <td>310</td>
                      <td>8%</td>
                      <td>96.92</td>
                      <td>£188,180</td>
                      <td>336,454</td>
                    </tr>
                    <tr>
                      <td>Kieran Shoemark</td>
                      <td>8-8</td>
                      <td>26</td>
                      <td>314</td>
                      <td>8%</td>
                      <td>27.77</td>
                      <td>£180,858</td>
                      <td>318,860</td>
                    </tr>
                    <tr>
                      <td>Callum Shepherd</td>
                      <td>8-7</td>
                      <td>26</td>
                      <td>320</td>
                      <td>8%</td>
                      <td>187.96</td>
                      <td>£180,802</td>
                      <td>315,638</td>
                    </tr>
                    <tr>
                      <td>Megan Nicholls</td>
                      <td>8-2</td>
                      <td>24</td>
                      <td>167</td>
                      <td>14%</td>
                      <td>30.50</td>
                      <td>£149,565</td>
                      <td>208,314</td>
                    </tr>
                    <tr>
                      <td>George Wood</td>
                      <td>8-3</td>
                      <td>24</td>
                      <td>249</td>
                      <td>10%</td>
                      <td>92.85</td>
                      <td>£113,550</td>
                      <td>212,071</td>
                    </tr>
                    <tr>
                      <td>Nicola Currie</td>
                      <td>8-0</td>
                      <td>24</td>
                      <td>293</td>
                      <td>8%</td>
                      <td>99.06</td>
                      <td>£211,075</td>
                      <td>364,916</td>
                    </tr>
                    <tr>
                      <td>Barry McHugh</td>
                      <td>8-3</td>
                      <td>23</td>
                      <td>197</td>
                      <td>12%</td>
                      <td>+10.63</td>
                      <td>£231,540</td>
                      <td>369,119</td>
                    </tr>
                    <tr>
                      <td>Jane Elliott</td>
                      <td>7-11</td>
                      <td>23</td>
                      <td>233</td>
                      <td>10%</td>
                      <td>43.54</td>
                      <td>£147,145</td>
                      <td>234,827</td>
                    </tr>
                    <tr>
                      <td>J F Egan</td>
                      <td>8-1</td>
                      <td>23</td>
                      <td>268</td>
                      <td>9%</td>
                      <td>124.29</td>
                      <td>£140,185</td>
                      <td>259,503</td>
                    </tr>
                    <tr>
                      <td>Thomas Greatrex</td>
                      <td>8-5</td>
                      <td>22</td>
                      <td>132</td>
                      <td>17%</td>
                      <td>+27.85</td>
                      <td>£99,099</td>
                      <td>137,675</td>
                    </tr>
                    <tr>
                      <td>Rowan Scott</td>
                      <td>8-4</td>
                      <td>22</td>
                      <td>207</td>
                      <td>11%</td>
                      <td>49.08</td>
                      <td>£120,144</td>
                      <td>201,498</td>
                    </tr>
                    <tr>
                      <td>Hayley Turner</td>
                      <td>8-0</td>
                      <td>22</td>
                      <td>210</td>
                      <td>10%</td>
                      <td>30.95</td>
                      <td>£230,713</td>
                      <td>355,235</td>
                    </tr>
                    <tr>
                      <td>David Nolan</td>
                      <td>9-0</td>
                      <td>22</td>
                      <td>270</td>
                      <td>8%</td>
                      <td>128.13</td>
                      <td>£114,210</td>
                      <td>260,895</td>
                    </tr>
                    <tr>
                      <td>Phil Dennis</td>
                      <td>8-2</td>
                      <td>22</td>
                      <td>330</td>
                      <td>7%</td>
                      <td>44.05</td>
                      <td>£252,020</td>
                      <td>388,541</td>
                    </tr>
                    <tr>
                      <td>Cam Hardie</td>
                      <td>8-0</td>
                      <td>22</td>
                      <td>465</td>
                      <td>5%</td>
                      <td>257.40</td>
                      <td>£98,201</td>
                      <td>253,921</td>
                    </tr>
                    <tr>
                      <td>Darragh Keenan</td>
                      <td>7-9</td>
                      <td>21</td>
                      <td>218</td>
                      <td>10%</td>
                      <td>84.82</td>
                      <td>£87,590</td>
                      <td>156,887</td>
                    </tr>
                    <tr>
                      <td>Gerald Mosse</td>
                      <td>8-9</td>
                      <td>21</td>
                      <td>228</td>
                      <td>9%</td>
                      <td>99.41</td>
                      <td>£380,290</td>
                      <td>690,759</td>
                    </tr>
                    <tr>
                      <td>Nathan Evans</td>
                      <td>8-0</td>
                      <td>21</td>
                      <td>268</td>
                      <td>8%</td>
                      <td>63.92</td>
                      <td>£160,840</td>
                      <td>274,757</td>
                    </tr>
                    <tr>
                      <td>Duran Fentiman</td>
                      <td>8-0</td>
                      <td>20</td>
                      <td>236</td>
                      <td>8%</td>
                      <td>+20.83</td>
                      <td>£128,881</td>
                      <td>231,473</td>
                    </tr>
                    <tr>
                      <td>Daniel Muscutt</td>
                      <td>8-9</td>
                      <td>20</td>
                      <td>247</td>
                      <td>8%</td>
                      <td>107.71</td>
                      <td>£112,822</td>
                      <td>245,449</td>
                    </tr>
                    <tr>
                      <td>Joey Haynes</td>
                      <td>8-3</td>
                      <td>19</td>
                      <td>202</td>
                      <td>9%</td>
                      <td>+33.50</td>
                      <td>£81,121</td>
                      <td>174,399</td>
                    </tr>
                    <tr>
                      <td>Andrew Mullen</td>
                      <td>8-0</td>
                      <td>19</td>
                      <td>400</td>
                      <td>5%</td>
                      <td>254.79</td>
                      <td>£82,360</td>
                      <td>213,902</td>
                    </tr>
                    <tr>
                      <td>Marco Ghiani</td>
                      <td>8-2</td>
                      <td>18</td>
                      <td>119</td>
                      <td>15%</td>
                      <td>+11.71</td>
                      <td>£118,771</td>
                      <td>223,136</td>
                    </tr>
                    <tr>
                      <td>Jamie Gormley</td>
                      <td>7-11</td>
                      <td>18</td>
                      <td>240</td>
                      <td>8%</td>
                      <td>93.17</td>
                      <td>£81,876</td>
                      <td>184,764</td>
                    </tr>
                    <tr>
                      <td>Sam James</td>
                      <td>8-6</td>
                      <td>17</td>
                      <td>197</td>
                      <td>9%</td>
                      <td>74.08</td>
                      <td>£98,696</td>
                      <td>176,623</td>
                    </tr>
                    <tr>
                      <td>Jack Garritty</td>
                      <td>8-12</td>
                      <td>17</td>
                      <td>201</td>
                      <td>8%</td>
                      <td>51.92</td>
                      <td>£117,803</td>
                      <td>177,843</td>
                    </tr>
                    <tr>
                      <td>Charlie Bennett</td>
                      <td>8-4</td>
                      <td>17</td>
                      <td>246</td>
                      <td>7%</td>
                      <td>72.00</td>
                      <td>£68,280</td>
                      <td>132,386</td>
                    </tr>
                    <tr>
                      <td>Joshua Bryan</td>
                      <td>8-10</td>
                      <td>16</td>
                      <td>93</td>
                      <td>17%</td>
                      <td>+9.87</td>
                      <td>£61,778</td>
                      <td>94,605</td>
                    </tr>
                    <tr>
                      <td>William Carver</td>
                      <td>8-1</td>
                      <td>16</td>
                      <td>111</td>
                      <td>14%</td>
                      <td>28.62</td>
                      <td>£67,880</td>
                      <td>114,642</td>
                    </tr>
                    <tr>
                      <td>Robert Winston</td>
                      <td>8-11</td>
                      <td>16</td>
                      <td>149</td>
                      <td>11%</td>
                      <td>32.04</td>
                      <td>£150,430</td>
                      <td>237,235</td>
                    </tr>
                    <tr>
                      <td>Sean Kirrane</td>
                      <td>8-0</td>
                      <td>15</td>
                      <td>120</td>
                      <td>13%</td>
                      <td>47.44</td>
                      <td>£53,142</td>
                      <td>88,744</td>
                    </tr>
                    <tr>
                      <td>Adam McNamara</td>
                      <td>8-8</td>
                      <td>15</td>
                      <td>120</td>
                      <td>13%</td>
                      <td>41.51</td>
                      <td>£58,816</td>
                      <td>100,255</td>
                    </tr>
                    <tr>
                      <td>Ryan Tate</td>
                      <td>8-7</td>
                      <td>15</td>
                      <td>146</td>
                      <td>10%</td>
                      <td>20.28</td>
                      <td>£72,733</td>
                      <td>115,547</td>
                    </tr>
                    <tr>
                      <td>Lewis Edmunds</td>
                      <td>8-8</td>
                      <td>15</td>
                      <td>206</td>
                      <td>7%</td>
                      <td>47.37</td>
                      <td>£83,027</td>
                      <td>160,112</td>
                    </tr>
                    <tr>
                      <td>Alistair Rawlinson</td>
                      <td>8-10</td>
                      <td>14</td>
                      <td>186</td>
                      <td>8%</td>
                      <td>76.35</td>
                      <td>£173,108</td>
                      <td>292,193</td>
                    </tr>
                    <tr>
                      <td>Paddy Mathers</td>
                      <td>8-0</td>
                      <td>14</td>
                      <td>263</td>
                      <td>5%</td>
                      <td>143.37</td>
                      <td>£82,448</td>
                      <td>276,448</td>
                    </tr>
                    <tr>
                      <td>Seamus Cronin</td>
                      <td>8-5</td>
                      <td>13</td>
                      <td>87</td>
                      <td>15%</td>
                      <td>+10.88</td>
                      <td>£65,169</td>
                      <td>89,824</td>
                    </tr>
                    <tr>
                      <td>Kieren Fox</td>
                      <td>8-5</td>
                      <td>13</td>
                      <td>132</td>
                      <td>10%</td>
                      <td>64.12</td>
                      <td>£66,688</td>
                      <td>115,137</td>
                    </tr>
                    <tr>
                      <td>Thore Hammer Hansen</td>
                      <td>7-11</td>
                      <td>13</td>
                      <td>136</td>
                      <td>10%</td>
                      <td>32.87</td>
                      <td>£88,246</td>
                      <td>198,918</td>
                    </tr>
                    <tr>
                      <td>Faye McManoman</td>
                      <td>7-10</td>
                      <td>13</td>
                      <td>150</td>
                      <td>9%</td>
                      <td>86.54</td>
                      <td>£61,152</td>
                      <td>121,125</td>
                    </tr>
                    <tr>
                      <td>Scott McCullagh</td>
                      <td>8-7</td>
                      <td>13</td>
                      <td>159</td>
                      <td>8%</td>
                      <td>61.42</td>
                      <td>£48,388</td>
                      <td>122,633</td>
                    </tr>
                    <tr>
                      <td>Jimmy Quinn</td>
                      <td>8-0</td>
                      <td>13</td>
                      <td>191</td>
                      <td>7%</td>
                      <td>71.75</td>
                      <td>£111,570</td>
                      <td>174,698</td>
                    </tr>
                    <tr>
                      <td>Nicky Mackay</td>
                      <td>8-0</td>
                      <td>12</td>
                      <td>109</td>
                      <td>11%</td>
                      <td>42.72</td>
                      <td>£86,475</td>
                      <td>119,410</td>
                    </tr>
                    <tr>
                      <td>Angus Villiers</td>
                      <td>7-12</td>
                      <td>12</td>
                      <td>110</td>
                      <td>11%</td>
                      <td>39.59</td>
                      <td>£93,645</td>
                      <td>159,729</td>
                    </tr>
                    <tr>
                      <td>Georgia Dobie</td>
                      <td>7-13</td>
                      <td>12</td>
                      <td>123</td>
                      <td>10%</td>
                      <td>55.22</td>
                      <td>£69,802</td>
                      <td>126,384</td>
                    </tr>
                    <tr>
                      <td>Liam Jones</td>
                      <td>8-2</td>
                      <td>12</td>
                      <td>161</td>
                      <td>7%</td>
                      <td>14.18</td>
                      <td>£46,706</td>
                      <td>100,332</td>
                    </tr>
                    <tr>
                      <td>Kerrin McEvoy</td>
                      <td>8-0</td>
                      <td>11</td>
                      <td>69</td>
                      <td>16%</td>
                      <td>16.75</td>
                      <td>£83,542</td>
                      <td>270,419</td>
                    </tr>
                    <tr>
                      <td>Louis Steward</td>
                      <td>8-11</td>
                      <td>10</td>
                      <td>57</td>
                      <td>18%</td>
                      <td>11.37</td>
                      <td>£112,174</td>
                      <td>151,712</td>
                    </tr>
                    <tr>
                      <td>Stefano Cherchi</td>
                      <td>8-3</td>
                      <td>10</td>
                      <td>72</td>
                      <td>14%</td>
                      <td>+52.00</td>
                      <td>£46,415</td>
                      <td>76,258</td>
                    </tr>
                    <tr>
                      <td>Ben Sanderson</td>
                      <td>8-5</td>
                      <td>10</td>
                      <td>107</td>
                      <td>9%</td>
                      <td>52.50</td>
                      <td>£59,454</td>
                      <td>103,980</td>
                    </tr>
                    <tr>
                      <td>Finley Marsh</td>
                      <td>8-6</td>
                      <td>10</td>
                      <td>122</td>
                      <td>8%</td>
                      <td>38.25</td>
                      <td>£47,376</td>
                      <td>96,886</td>
                    </tr>
                    <tr>
                      <td>Gabriele Malune</td>
                      <td>7-13</td>
                      <td>10</td>
                      <td>134</td>
                      <td>7%</td>
                      <td>64.63</td>
                      <td>£58,548</td>
                      <td>98,562</td>
                    </tr>
                    <tr>
                      <td>Connor Murtagh</td>
                      <td>8-4</td>
                      <td>10</td>
                      <td>177</td>
                      <td>6%</td>
                      <td>77.25</td>
                      <td>£44,541</td>
                      <td>113,350</td>
                    </tr>
                    <tr>
                      <td>Georgia Cox</td>
                      <td>8-4</td>
                      <td>9</td>
                      <td>61</td>
                      <td>15%</td>
                      <td>8.21</td>
                      <td>£47,676</td>
                      <td>64,681</td>
                    </tr>
                    <tr>
                      <td>Rhiain Ingram</td>
                      <td>7-9</td>
                      <td>9</td>
                      <td>79</td>
                      <td>11%</td>
                      <td>6.15</td>
                      <td>£28,592</td>
                      <td>42,911</td>
                    </tr>
                    <tr>
                      <td>Paula Muir</td>
                      <td>7-11</td>
                      <td>9</td>
                      <td>189</td>
                      <td>5%</td>
                      <td>129.62</td>
                      <td>£40,287</td>
                      <td>111,425</td>
                    </tr>
                    <tr>
                      <td>Tom Queally</td>
                      <td>8-11</td>
                      <td>9</td>
                      <td>210</td>
                      <td>4%</td>
                      <td>125.12</td>
                      <td>£52,638</td>
                      <td>135,802</td>
                    </tr>
                    <tr>
                      <td>Callum Rodriguez</td>
                      <td>8-10</td>
                      <td>8</td>
                      <td>68</td>
                      <td>12%</td>
                      <td>24.08</td>
                      <td>£49,926</td>
                      <td>90,861</td>
                    </tr>
                    <tr>
                      <td>Sophie Ralston</td>
                      <td>7-9</td>
                      <td>8</td>
                      <td>103</td>
                      <td>8%</td>
                      <td>+60.50</td>
                      <td>£39,784</td>
                      <td>67,826</td>
                    </tr>
                    <tr>
                      <td>Brett Doyle</td>
                      <td>8-5</td>
                      <td>8</td>
                      <td>118</td>
                      <td>7%</td>
                      <td>8.36</td>
                      <td>£28,398</td>
                      <td>93,171</td>
                    </tr>
                    <tr>
                      <td>Robbie Downey</td>
                      <td>8-9</td>
                      <td>8</td>
                      <td>120</td>
                      <td>7%</td>
                      <td>39.83</td>
                      <td>£44,628</td>
                      <td>88,311</td>
                    </tr>
                    <tr>
                      <td>Trevor Whelan</td>
                      <td>8-9</td>
                      <td>8</td>
                      <td>136</td>
                      <td>6%</td>
                      <td>91.12</td>
                      <td>£34,997</td>
                      <td>68,361</td>
                    </tr>
                    <tr>
                      <td>Toby Eley</td>
                      <td>8-2</td>
                      <td>8</td>
                      <td>138</td>
                      <td>6%</td>
                      <td>76.87</td>
                      <td>£30,404</td>
                      <td>72,277</td>
                    </tr>
                    <tr>
                      <td>Theodore Ladd</td>
                      <td>7-13</td>
                      <td>8</td>
                      <td>151</td>
                      <td>5%</td>
                      <td>113.92</td>
                      <td>£81,190</td>
                      <td>151,719</td>
                    </tr>
                    <tr>
                      <td>William Cox</td>
                      <td>7-13</td>
                      <td>8</td>
                      <td>192</td>
                      <td>4%</td>
                      <td>134.37</td>
                      <td>£41,428</td>
                      <td>103,891</td>
                    </tr>
                    <tr>
                      <td>Tyler Saunders</td>
                      <td>8-6</td>
                      <td>7</td>
                      <td>45</td>
                      <td>16%</td>
                      <td>12.65</td>
                      <td>£24,517</td>
                      <td>46,931</td>
                    </tr>
                    <tr>
                      <td>Rhona Pindar</td>
                      <td>8-0</td>
                      <td>7</td>
                      <td>66</td>
                      <td>11%</td>
                      <td>21.69</td>
                      <td>£23,223</td>
                      <td>43,599</td>
                    </tr>
                    <tr>
                      <td>Edward Greatrex</td>
                      <td>8-6</td>
                      <td>7</td>
                      <td>84</td>
                      <td>8%</td>
                      <td>54.74</td>
                      <td>£32,135</td>
                      <td>55,706</td>
                    </tr>
                    <tr>
                      <td>Cameron Noble</td>
                      <td>8-5</td>
                      <td>7</td>
                      <td>93</td>
                      <td>8%</td>
                      <td>49.00</td>
                      <td>£56,690</td>
                      <td>118,527</td>
                    </tr>
                    <tr>
                      <td>Donagh O'Connor</td>
                      <td>8-11</td>
                      <td>6</td>
                      <td>9</td>
                      <td>67%</td>
                      <td>+31.83</td>
                      <td>£19,083</td>
                      <td>20,795</td>
                    </tr>
                    <tr>
                      <td>Miss Brodie Hampson</td>
                      <td>9-12</td>
                      <td>6</td>
                      <td>17</td>
                      <td>35%</td>
                      <td>+8.50</td>
                      <td>£19,216</td>
                      <td>24,826</td>
                    </tr>
                    <tr>
                      <td>C Y Ho</td>
                      <td>8-3</td>
                      <td>6</td>
                      <td>22</td>
                      <td>27%</td>
                      <td>+11.25</td>
                      <td>£71,809</td>
                      <td>94,657</td>
                    </tr>
                    <tr>
                      <td>Colm O'Donoghue</td>
                      <td>8-7</td>
                      <td>6</td>
                      <td>40</td>
                      <td>15%</td>
                      <td>16.16</td>
                      <td>£51,946</td>
                      <td>96,966</td>
                    </tr>
                    <tr>
                      <td>Kate Leahy</td>
                      <td>8-5</td>
                      <td>6</td>
                      <td>49</td>
                      <td>12%</td>
                      <td>5.50</td>
                      <td>£28,237</td>
                      <td>44,713</td>
                    </tr>
                    <tr>
                      <td>Zak Wheatley</td>
                      <td>8-0</td>
                      <td>6</td>
                      <td>57</td>
                      <td>11%</td>
                      <td>+16.50</td>
                      <td>£28,226</td>
                      <td>49,445</td>
                    </tr>
                    <tr>
                      <td>Gavin Ashton</td>
                      <td>7-9</td>
                      <td>6</td>
                      <td>82</td>
                      <td>7%</td>
                      <td>49.83</td>
                      <td>£20,959</td>
                      <td>48,887</td>
                    </tr>
                    <tr>
                      <td>Conor McGovern</td>
                      <td>8-4</td>
                      <td>6</td>
                      <td>93</td>
                      <td>6%</td>
                      <td>42.50</td>
                      <td>£26,974</td>
                      <td>64,699</td>
                    </tr>
                    <tr>
                      <td>Raul Da Silva</td>
                      <td>8-0</td>
                      <td>6</td>
                      <td>158</td>
                      <td>4%</td>
                      <td>115.50</td>
                      <td>£20,053</td>
                      <td>80,892</td>
                    </tr>
                    <tr>
                      <td>Dougie Costello</td>
                      <td>8-10</td>
                      <td>6</td>
                      <td>190</td>
                      <td>3%</td>
                      <td>106.97</td>
                      <td>£24,711</td>
                      <td>82,445</td>
                    </tr>
                    <tr>
                      <td>Rachel Richardson</td>
                      <td>8-2</td>
                      <td>6</td>
                      <td>197</td>
                      <td>3%</td>
                      <td>135.12</td>
                      <td>£20,636</td>
                      <td>80,264</td>
                    </tr>
                    <tr>
                      <td>Miss Sarah Bowen</td>
                      <td>8-12</td>
                      <td>5</td>
                      <td>30</td>
                      <td>17%</td>
                      <td>+13.50</td>
                      <td>£33,066</td>
                      <td>43,497</td>
                    </tr>
                    <tr>
                      <td>Miss Becky Smith</td>
                      <td>9-2</td>
                      <td>5</td>
                      <td>34</td>
                      <td>15%</td>
                      <td>10.90</td>
                      <td>£20,041</td>
                      <td>28,732</td>
                    </tr>
                    <tr>
                      <td>Cian MacRedmond</td>
                      <td>8-2</td>
                      <td>5</td>
                      <td>38</td>
                      <td>13%</td>
                      <td>+28.00</td>
                      <td>£34,239</td>
                      <td>45,073</td>
                    </tr>
                    <tr>
                      <td>Sebastian Woods</td>
                      <td>8-9</td>
                      <td>5</td>
                      <td>42</td>
                      <td>12%</td>
                      <td>16.50</td>
                      <td>£15,913</td>
                      <td>30,405</td>
                    </tr>
                    <tr>
                      <td>Izzy Clifton</td>
                      <td>7-9</td>
                      <td>5</td>
                      <td>46</td>
                      <td>11%</td>
                      <td>+33.00</td>
                      <td>£18,792</td>
                      <td>42,572</td>
                    </tr>
                    <tr>
                      <td>Corey Madden</td>
                      <td>7-13</td>
                      <td>5</td>
                      <td>54</td>
                      <td>9%</td>
                      <td>17.62</td>
                      <td>£21,056</td>
                      <td>39,327</td>
                    </tr>
                    <tr>
                      <td>Donnacha O'Brien</td>
                      <td>8-12</td>
                      <td>5</td>
                      <td>54</td>
                      <td>9%</td>
                      <td>31.12</td>
                      <td>£1,419,167</td>
                      <td>1,959,842</td>
                    </tr>
                    <tr>
                      <td>Pierre-Louis Jamin</td>
                      <td>8-3</td>
                      <td>5</td>
                      <td>58</td>
                      <td>9%</td>
                      <td>22.50</td>
                      <td>£23,159</td>
                      <td>47,216</td>
                    </tr>
                    <tr>
                      <td>Danny Redmond</td>
                      <td>8-11</td>
                      <td>5</td>
                      <td>65</td>
                      <td>8%</td>
                      <td>26.50</td>
                      <td>£29,655</td>
                      <td>56,379</td>
                    </tr>
                    <tr>
                      <td>Ellie MacKenzie</td>
                      <td>7-11</td>
                      <td>5</td>
                      <td>66</td>
                      <td>8%</td>
                      <td>3.25</td>
                      <td>£19,148</td>
                      <td>35,635</td>
                    </tr>
                    <tr>
                      <td>Elisha Whittington</td>
                      <td>7-8</td>
                      <td>5</td>
                      <td>79</td>
                      <td>6%</td>
                      <td>4.75</td>
                      <td>£20,169</td>
                      <td>40,725</td>
                    </tr>
                    <tr>
                      <td>Aled Beech</td>
                      <td>7-12</td>
                      <td>5</td>
                      <td>84</td>
                      <td>6%</td>
                      <td>41.00</td>
                      <td>£17,725</td>
                      <td>43,312</td>
                    </tr>
                    <tr>
                      <td>George Downing</td>
                      <td>8-9</td>
                      <td>5</td>
                      <td>91</td>
                      <td>5%</td>
                      <td>+11.50</td>
                      <td>£15,849</td>
                      <td>37,068</td>
                    </tr>
                    <tr>
                      <td>Dylan Hogan</td>
                      <td>8-6</td>
                      <td>5</td>
                      <td>131</td>
                      <td>4%</td>
                      <td>85.00</td>
                      <td>£19,568</td>
                      <td>77,058</td>
                    </tr>
                    <tr>
                      <td>Eoin Walsh</td>
                      <td>8-4</td>
                      <td>5</td>
                      <td>149</td>
                      <td>3%</td>
                      <td>80.50</td>
                      <td>£15,590</td>
                      <td>46,371</td>
                    </tr>
                    <tr>
                      <td>Miss Imogen Mathias</td>
                      <td>8-11</td>
                      <td>4</td>
                      <td>15</td>
                      <td>27%</td>
                      <td>+33.75</td>
                      <td>£12,121</td>
                      <td>15,690</td>
                    </tr>
                    <tr>
                      <td>Miss Joanna Mason</td>
                      <td>9-2</td>
                      <td>4</td>
                      <td>36</td>
                      <td>11%</td>
                      <td>12.17</td>
                      <td>£16,435</td>
                      <td>29,199</td>
                    </tr>
                    <tr>
                      <td>Poppy Bridgwater</td>
                      <td>8-3</td>
                      <td>4</td>
                      <td>63</td>
                      <td>6%</td>
                      <td>+2.00</td>
                      <td>£18,468</td>
                      <td>34,814</td>
                    </tr>
                    <tr>
                      <td>Andrew Elliott</td>
                      <td>8-3</td>
                      <td>4</td>
                      <td>98</td>
                      <td>4%</td>
                      <td>39.00</td>
                      <td>£20,765</td>
                      <td>39,558</td>
                    </tr>
                    <tr>
                      <td>Andrew Breslin</td>
                      <td>7-9</td>
                      <td>4</td>
                      <td>115</td>
                      <td>3%</td>
                      <td>89.25</td>
                      <td>£15,687</td>
                      <td>47,630</td>
                    </tr>
                    <tr>
                      <td>Mr William Easterby</td>
                      <td>9-11</td>
                      <td>3</td>
                      <td>9</td>
                      <td>33%</td>
                      <td>+4.75</td>
                      <td>£12,228</td>
                      <td>16,711</td>
                    </tr>
                    <tr>
                      <td>Mrs Carol Bartley</td>
                      <td>8-9</td>
                      <td>3</td>
                      <td>15</td>
                      <td>20%</td>
                      <td>+32.00</td>
                      <td>£21,475</td>
                      <td>23,575</td>
                    </tr>
                    <tr>
                      <td>Levi Williams</td>
                      <td>7-12</td>
                      <td>3</td>
                      <td>18</td>
                      <td>17%</td>
                      <td>+23.00</td>
                      <td>£10,642</td>
                      <td>16,740</td>
                    </tr>
                    <tr>
                      <td>Mr Patrick Millman</td>
                      <td>9-9</td>
                      <td>3</td>
                      <td>19</td>
                      <td>16%</td>
                      <td>+5.91</td>
                      <td>£10,656</td>
                      <td>22,083</td>
                    </tr>
                    <tr>
                      <td>Miss Amy Collier</td>
                      <td>9-8</td>
                      <td>3</td>
                      <td>21</td>
                      <td>14%</td>
                      <td>2.50</td>
                      <td>£10,779</td>
                      <td>18,250</td>
                    </tr>
                    <tr>
                      <td>Mark Crehan</td>
                      <td>8-4</td>
                      <td>3</td>
                      <td>23</td>
                      <td>13%</td>
                      <td>9.00</td>
                      <td>£14,296</td>
                      <td>23,331</td>
                    </tr>
                    <tr>
                      <td>Mr Eireann Cagney</td>
                      <td>9-2</td>
                      <td>3</td>
                      <td>24</td>
                      <td>13%</td>
                      <td>+5.00</td>
                      <td>£14,507</td>
                      <td>19,712</td>
                    </tr>
                    <tr>
                      <td>Jonathan Fisher</td>
                      <td>8-5</td>
                      <td>3</td>
                      <td>30</td>
                      <td>10%</td>
                      <td>+16.50</td>
                      <td>£14,490</td>
                      <td>25,123</td>
                    </tr>
                    <tr>
                      <td>Wayne Lordan</td>
                      <td>8-0</td>
                      <td>3</td>
                      <td>32</td>
                      <td>9%</td>
                      <td>+12.00</td>
                      <td>£399,805</td>
                      <td>944,694</td>
                    </tr>
                    <tr>
                      <td>Amelia Glass</td>
                      <td>8-0</td>
                      <td>3</td>
                      <td>33</td>
                      <td>9%</td>
                      <td>+24.00</td>
                      <td>£9,703</td>
                      <td>19,680</td>
                    </tr>
                    <tr>
                      <td>Gemma Tutty</td>
                      <td>8-12</td>
                      <td>3</td>
                      <td>37</td>
                      <td>8%</td>
                      <td>17.50</td>
                      <td>£11,465</td>
                      <td>24,367</td>
                    </tr>
                    <tr>
                      <td>Luke Catton</td>
                      <td>8-7</td>
                      <td>3</td>
                      <td>40</td>
                      <td>8%</td>
                      <td>19.50</td>
                      <td>£9,768</td>
                      <td>28,227</td>
                    </tr>
                    <tr>
                      <td>Shelley Birkett</td>
                      <td>8-2</td>
                      <td>3</td>
                      <td>45</td>
                      <td>7%</td>
                      <td>+12.50</td>
                      <td>£11,838</td>
                      <td>24,398</td>
                    </tr>
                    <tr>
                      <td>Ella McCain</td>
                      <td>7-12</td>
                      <td>3</td>
                      <td>48</td>
                      <td>6%</td>
                      <td>24.00</td>
                      <td>£10,415</td>
                      <td>23,008</td>
                    </tr>
                    <tr>
                      <td>John Fahy</td>
                      <td>8-4</td>
                      <td>3</td>
                      <td>57</td>
                      <td>5%</td>
                      <td>11.55</td>
                      <td>£9,268</td>
                      <td>18,930</td>
                    </tr>
                    <tr>
                      <td>Victor Santos</td>
                      <td>7-9</td>
                      <td>3</td>
                      <td>60</td>
                      <td>5%</td>
                      <td>39.50</td>
                      <td>£11,061</td>
                      <td>26,163</td>
                    </tr>
                    <tr>
                      <td>Laura Coughlan</td>
                      <td>7-9</td>
                      <td>3</td>
                      <td>68</td>
                      <td>4%</td>
                      <td>34.50</td>
                      <td>£10,729</td>
                      <td>28,626</td>
                    </tr>
                    <tr>
                      <td>Isobel Francis</td>
                      <td>7-7</td>
                      <td>3</td>
                      <td>68</td>
                      <td>4%</td>
                      <td>50.25</td>
                      <td>£13,132</td>
                      <td>28,559</td>
                    </tr>
                    <tr>
                      <td>Harry Russell</td>
                      <td>8-6</td>
                      <td>3</td>
                      <td>82</td>
                      <td>4%</td>
                      <td>65.25</td>
                      <td>£11,838</td>
                      <td>32,280</td>
                    </tr>
                    <tr>
                      <td>Kieran Schofield</td>
                      <td>7-9</td>
                      <td>3</td>
                      <td>83</td>
                      <td>4%</td>
                      <td>75.00</td>
                      <td>£16,324</td>
                      <td>41,962</td>
                    </tr>
                    <tr>
                      <td>Miss Shannon Watts</td>
                      <td>8-9</td>
                      <td>2</td>
                      <td>13</td>
                      <td>15%</td>
                      <td>+19.00</td>
                      <td>£6,725</td>
                      <td>9,233</td>
                    </tr>
                    <tr>
                      <td>Miss Emma Sayer</td>
                      <td>9-12</td>
                      <td>2</td>
                      <td>14</td>
                      <td>14%</td>
                      <td>4.00</td>
                      <td>£16,196</td>
                      <td>22,691</td>
                    </tr>
                    <tr>
                      <td>Rhys Clutterbuck</td>
                      <td>8-6</td>
                      <td>2</td>
                      <td>15</td>
                      <td>13%</td>
                      <td>+5.00</td>
                      <td>£10,867</td>
                      <td>13,618</td>
                    </tr>
                    <tr>
                      <td>Colin Keane</td>
                      <td>8-8</td>
                      <td>2</td>
                      <td>15</td>
                      <td>13%</td>
                      <td>+5.25</td>
                      <td>£612,450</td>
                      <td>643,724</td>
                    </tr>
                    <tr>
                      <td>Oliver Searle</td>
                      <td>8-1</td>
                      <td>2</td>
                      <td>15</td>
                      <td>13%</td>
                      <td>0.50</td>
                      <td>£10,253</td>
                      <td>16,227</td>
                    </tr>
                    <tr>
                      <td>Miss Emma Todd</td>
                      <td>9-7</td>
                      <td>2</td>
                      <td>15</td>
                      <td>13%</td>
                      <td></td>
                      <td>£6,925</td>
                      <td>11,738</td>
                    </tr>
                    <tr>
                      <td>Mr James Harding</td>
                      <td>9-12</td>
                      <td>2</td>
                      <td>16</td>
                      <td>13%</td>
                      <td>3.50</td>
                      <td>£6,675</td>
                      <td>10,584</td>
                    </tr>
                    <tr>
                      <td>Ryan While</td>
                      <td>8-9</td>
                      <td>2</td>
                      <td>19</td>
                      <td>11%</td>
                      <td>5.00</td>
                      <td>£8,312</td>
                      <td>17,307</td>
                    </tr>
                    <tr>
                      <td>Aaron Jones</td>
                      <td>8-0</td>
                      <td>2</td>
                      <td>21</td>
                      <td>10%</td>
                      <td>+27.00</td>
                      <td>£6,533</td>
                      <td>12,426</td>
                    </tr>
                    <tr>
                      <td>Chris Hayes</td>
                      <td>8-4</td>
                      <td>2</td>
                      <td>25</td>
                      <td>8%</td>
                      <td>2.00</td>
                      <td>£41,359</td>
                      <td>440,247</td>
                    </tr>
                    <tr>
                      <td>George Bass</td>
                      <td>8-0</td>
                      <td>2</td>
                      <td>27</td>
                      <td>7%</td>
                      <td>13.50</td>
                      <td>£7,908</td>
                      <td>17,822</td>
                    </tr>
                    <tr>
                      <td>Seamie Heffernan</td>
                      <td>8-8</td>
                      <td>2</td>
                      <td>27</td>
                      <td>7%</td>
                      <td>+3.50</td>
                      <td>£977,562</td>
                      <td>1,363,927</td>
                    </tr>
                    <tr>
                      <td>Miss Sophie Smith</td>
                      <td>8-11</td>
                      <td>2</td>
                      <td>27</td>
                      <td>7%</td>
                      <td>16.50</td>
                      <td>£6,301</td>
                      <td>15,364</td>
                    </tr>
                    <tr>
                      <td>Ger O'Neill</td>
                      <td>8-6</td>
                      <td>2</td>
                      <td>29</td>
                      <td>7%</td>
                      <td>9.00</td>
                      <td>£6,928</td>
                      <td>12,910</td>
                    </tr>
                    <tr>
                      <td>Miss Serena Brotherton</td>
                      <td>8-10</td>
                      <td>2</td>
                      <td>38</td>
                      <td>5%</td>
                      <td>21.00</td>
                      <td>£9,670</td>
                      <td>30,224</td>
                    </tr>
                    <tr>
                      <td>Grace McEntee</td>
                      <td>8-1</td>
                      <td>2</td>
                      <td>66</td>
                      <td>3%</td>
                      <td>44.00</td>
                      <td>£7,309</td>
                      <td>26,247</td>
                    </tr>
                    <tr>
                      <td>Mitch Godwin</td>
                      <td>8-6</td>
                      <td>2</td>
                      <td>71</td>
                      <td>3%</td>
                      <td>16.00</td>
                      <td>£7,504</td>
                      <td>27,140</td>
                    </tr>
                    <tr>
                      <td>Royston Ffrench</td>
                      <td>8-0</td>
                      <td>2</td>
                      <td>169</td>
                      <td>1%</td>
                      <td>36.00</td>
                      <td>£6,986</td>
                      <td>61,652</td>
                    </tr>
                    <tr>
                      <td>Sammy Jo Bell</td>
                      <td>11-5</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+5.00</td>
                      <td>£6,727</td>
                      <td>6,727</td>
                    </tr>
                    <tr>
                      <td>Mr T Hamilton</td>
                      <td>10-9</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+4.50</td>
                      <td>£9,358</td>
                      <td>9,358</td>
                    </tr>
                    <tr>
                      <td>Ben Jones</td>
                      <td>10-9</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+50.00</td>
                      <td>£2,994</td>
                      <td>2,994</td>
                    </tr>
                    <tr>
                      <td>Karen Kenny</td>
                      <td>7-11</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+12.00</td>
                      <td>£2,975</td>
                      <td>2,975</td>
                    </tr>
                    <tr>
                      <td>Mr Michael Legg</td>
                      <td>11-9</td>
                      <td>1</td>
                      <td>1</td>
                      <td>100%</td>
                      <td>+4.00</td>
                      <td>£4,679</td>
                      <td>4,679</td>
                    </tr>
                    <tr>
                      <td>Miss Jessica Bedi</td>
                      <td>9-1</td>
                      <td>1</td>
                      <td>2</td>
                      <td>50%</td>
                      <td>+7.00</td>
                      <td>£2,994</td>
                      <td>3,956</td>
                    </tr>
                    <tr>
                      <td>Mr Matthew Johnson</td>
                      <td>9-12</td>
                      <td>1</td>
                      <td>2</td>
                      <td>50%</td>
                      <td>+15.00</td>
                      <td>£2,994</td>
                      <td>3,394</td>
                    </tr>
                    <tr>
                      <td>Joshua Moore</td>
                      <td>10-8</td>
                      <td>1</td>
                      <td>2</td>
                      <td>50%</td>
                      <td>+7.00</td>
                      <td>£15,562</td>
                      <td>17,872</td>
                    </tr>
                    <tr>
                      <td>Oisin Orr</td>
                      <td>8-10</td>
                      <td>1</td>
                      <td>2</td>
                      <td>50%</td>
                      <td>+2.50</td>
                      <td>£9,962</td>
                      <td>10,262</td>
                    </tr>
                    <tr>
                      <td>Mr M A Galligan</td>
                      <td>10-6</td>
                      <td>1</td>
                      <td>3</td>
                      <td>33%</td>
                      <td>+1.50</td>
                      <td>£3,306</td>
                      <td>3,906</td>
                    </tr>
                    <tr>
                      <td>Charlotte Bennett</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>4</td>
                      <td>25%</td>
                      <td>+9.00</td>
                      <td>£4,398</td>
                      <td>4,698</td>
                    </tr>
                    <tr>
                      <td>Mr Charles Clover</td>
                      <td>10-0</td>
                      <td>1</td>
                      <td>4</td>
                      <td>25%</td>
                      <td>+22.00</td>
                      <td>£3,618</td>
                      <td>5,015</td>
                    </tr>
                    <tr>
                      <td>Poppy Fielding</td>
                      <td>8-7</td>
                      <td>1</td>
                      <td>4</td>
                      <td>25%</td>
                      <td>+17.00</td>
                      <td>£3,881</td>
                      <td>4,902</td>
                    </tr>
                    <tr>
                      <td>Miss Abbie McCain</td>
                      <td>10-4</td>
                      <td>1</td>
                      <td>4</td>
                      <td>25%</td>
                      <td>+22.00</td>
                      <td>£2,994</td>
                      <td>2,994</td>
                    </tr>
                    <tr>
                      <td>Lorenzo Atzori</td>
                      <td>8-8</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td></td>
                      <td>£3,428</td>
                      <td>4,798</td>
                    </tr>
                    <tr>
                      <td>Filip Minarik</td>
                      <td>8-3</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td>+1.50</td>
                      <td>£29,508</td>
                      <td>42,936</td>
                    </tr>
                    <tr>
                      <td>Marie Perrault</td>
                      <td>8-13</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td>+8.00</td>
                      <td>£4,528</td>
                      <td>6,175</td>
                    </tr>
                    <tr>
                      <td>Miss Megan Trainor</td>
                      <td>9-2</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td>+96.00</td>
                      <td>£3,606</td>
                      <td>4,306</td>
                    </tr>
                    <tr>
                      <td>Mark Zahra</td>
                      <td>8-10</td>
                      <td>1</td>
                      <td>5</td>
                      <td>20%</td>
                      <td>+3.00</td>
                      <td>£29,508</td>
                      <td>54,456</td>
                    </tr>
                    <tr>
                      <td>Mickael Barzalona</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>6</td>
                      <td>17%</td>
                      <td>2.25</td>
                      <td>£155,952</td>
                      <td>205,080</td>
                    </tr>
                    <tr>
                      <td>Miss Katy Brooks</td>
                      <td>9-7</td>
                      <td>1</td>
                      <td>6</td>
                      <td>17%</td>
                      <td>+3.00</td>
                      <td>£2,682</td>
                      <td>5,623</td>
                    </tr>
                    <tr>
                      <td>D M Simmonson</td>
                      <td>8-3</td>
                      <td>1</td>
                      <td>6</td>
                      <td>17%</td>
                      <td>+3.00</td>
                      <td>£3,234</td>
                      <td>4,854</td>
                    </tr>
                    <tr>
                      <td>Mr Philip Thomas</td>
                      <td>10-0</td>
                      <td>1</td>
                      <td>6</td>
                      <td>17%</td>
                      <td>1.50</td>
                      <td>£2,682</td>
                      <td>6,273</td>
                    </tr>
                    <tr>
                      <td>Gianluca Sanna</td>
                      <td>8-6</td>
                      <td>1</td>
                      <td>7</td>
                      <td>14%</td>
                      <td>1.00</td>
                      <td>£4,851</td>
                      <td>5,151</td>
                    </tr>
                    <tr>
                      <td>Aiden Blakemore</td>
                      <td>8-11</td>
                      <td>1</td>
                      <td>8</td>
                      <td>13%</td>
                      <td>3.00</td>
                      <td>£2,975</td>
                      <td>4,536</td>
                    </tr>
                    <tr>
                      <td>Tristan Price</td>
                      <td>8-4</td>
                      <td>1</td>
                      <td>8</td>
                      <td>13%</td>
                      <td>3.50</td>
                      <td>£4,851</td>
                      <td>6,402</td>
                    </tr>
                    <tr>
                      <td>Miss Catherine Walton</td>
                      <td>9-2</td>
                      <td>1</td>
                      <td>8</td>
                      <td>13%</td>
                      <td>+5.00</td>
                      <td>£2,682</td>
                      <td>3,642</td>
                    </tr>
                    <tr>
                      <td>Pierre-Charles Boudot</td>
                      <td>8-9</td>
                      <td>1</td>
                      <td>9</td>
                      <td>11%</td>
                      <td>+12.00</td>
                      <td>£283,550</td>
                      <td>925,182</td>
                    </tr>
                    <tr>
                      <td>Elinor Jones</td>
                      <td>8-0</td>
                      <td>1</td>
                      <td>9</td>
                      <td>11%</td>
                      <td>3.50</td>
                      <td>£2,781</td>
                      <td>5,947</td>
                    </tr>
                    <tr>
                      <td>Mr Matthew Ennis</td>
                      <td>9-13</td>
                      <td>1</td>
                      <td>10</td>
                      <td>10%</td>
                      <td>8.00</td>
                      <td>£2,994</td>
                      <td>5,755</td>
                    </tr>
                    <tr>
                      <td>Aiden Smithies</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>10</td>
                      <td>10%</td>
                      <td>2.00</td>
                      <td>£3,105</td>
                      <td>5,132</td>
                    </tr>
                    <tr>
                      <td>Miss Amie Waugh</td>
                      <td>8-9</td>
                      <td>1</td>
                      <td>10</td>
                      <td>10%</td>
                      <td>+16.00</td>
                      <td>£2,950</td>
                      <td>5,604</td>
                    </tr>
                    <tr>
                      <td>Joe Bradnam</td>
                      <td>8-2</td>
                      <td>1</td>
                      <td>11</td>
                      <td>9%</td>
                      <td>4.50</td>
                      <td>£3,752</td>
                      <td>6,855</td>
                    </tr>
                    <tr>
                      <td>Antonio Fresu</td>
                      <td>8-4</td>
                      <td>1</td>
                      <td>11</td>
                      <td>9%</td>
                      <td>1.00</td>
                      <td>£12,450</td>
                      <td>30,843</td>
                    </tr>
                    <tr>
                      <td>Miss Jessica Llewellyn</td>
                      <td>8-9</td>
                      <td>1</td>
                      <td>11</td>
                      <td>9%</td>
                      <td>+6.00</td>
                      <td>£5,927</td>
                      <td>10,109</td>
                    </tr>
                    <tr>
                      <td>Miss Antonia Peck</td>
                      <td>8-11</td>
                      <td>1</td>
                      <td>11</td>
                      <td>9%</td>
                      <td>+15.00</td>
                      <td>£3,244</td>
                      <td>5,744</td>
                    </tr>
                    <tr>
                      <td>Louis Garoghan</td>
                      <td>8-0</td>
                      <td>1</td>
                      <td>13</td>
                      <td>8%</td>
                      <td>+8.00</td>
                      <td>£2,781</td>
                      <td>5,842</td>
                    </tr>
                    <tr>
                      <td>Miss Hannah Welch</td>
                      <td>9-4</td>
                      <td>1</td>
                      <td>13</td>
                      <td>8%</td>
                      <td>5.50</td>
                      <td>£2,994</td>
                      <td>7,490</td>
                    </tr>
                    <tr>
                      <td>George Buckell</td>
                      <td>8-8</td>
                      <td>1</td>
                      <td>14</td>
                      <td>7%</td>
                      <td>6.50</td>
                      <td>£3,105</td>
                      <td>7,209</td>
                    </tr>
                    <tr>
                      <td>Tim Clark</td>
                      <td>8-3</td>
                      <td>1</td>
                      <td>14</td>
                      <td>7%</td>
                      <td>2.00</td>
                      <td>£9,703</td>
                      <td>11,303</td>
                    </tr>
                    <tr>
                      <td>Shane Foley</td>
                      <td>8-7</td>
                      <td>1</td>
                      <td>15</td>
                      <td>7%</td>
                      <td>+2.00</td>
                      <td>£165,355</td>
                      <td>231,929</td>
                    </tr>
                    <tr>
                      <td>Luke Bacon</td>
                      <td>7-10</td>
                      <td>1</td>
                      <td>18</td>
                      <td>6%</td>
                      <td>13.67</td>
                      <td>£2,781</td>
                      <td>8,152</td>
                    </tr>
                    <tr>
                      <td>Miss Emily Bullock</td>
                      <td>9-3</td>
                      <td>1</td>
                      <td>18</td>
                      <td>6%</td>
                      <td>13.50</td>
                      <td>£3,992</td>
                      <td>14,572</td>
                    </tr>
                    <tr>
                      <td>Tadhg O'Shea</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>21</td>
                      <td>5%</td>
                      <td>+13.00</td>
                      <td>£4,787</td>
                      <td>29,068</td>
                    </tr>
                    <tr>
                      <td>Mr Simon Walker</td>
                      <td>10-4</td>
                      <td>1</td>
                      <td>22</td>
                      <td>5%</td>
                      <td>18.50</td>
                      <td>£7,486</td>
                      <td>18,529</td>
                    </tr>
                    <tr>
                      <td>Morgan Cole</td>
                      <td>7-11</td>
                      <td>1</td>
                      <td>23</td>
                      <td>4%</td>
                      <td>18.67</td>
                      <td>£6,469</td>
                      <td>9,893</td>
                    </tr>
                    <tr>
                      <td>Michael Stainton</td>
                      <td>8-11</td>
                      <td>1</td>
                      <td>23</td>
                      <td>4%</td>
                      <td>+28.00</td>
                      <td>£3,428</td>
                      <td>7,360</td>
                    </tr>
                    <tr>
                      <td>Jessica Cooley</td>
                      <td>8-4</td>
                      <td>1</td>
                      <td>24</td>
                      <td>4%</td>
                      <td>7.00</td>
                      <td>£4,851</td>
                      <td>16,061</td>
                    </tr>
                    <tr>
                      <td>Miss Emily Easterby</td>
                      <td>9-9</td>
                      <td>1</td>
                      <td>25</td>
                      <td>4%</td>
                      <td>20.00</td>
                      <td>£4,204</td>
                      <td>14,292</td>
                    </tr>
                    <tr>
                      <td>Danny Brock</td>
                      <td>8-5</td>
                      <td>1</td>
                      <td>34</td>
                      <td>3%</td>
                      <td>23.00</td>
                      <td>£3,105</td>
                      <td>8,976</td>
                    </tr>
                    <tr>
                      <td>George Rooke</td>
                      <td>7-9</td>
                      <td>1</td>
                      <td>48</td>
                      <td>2%</td>
                      <td>40.50</td>
                      <td>£3,428</td>
                      <td>19,542</td>
                    </tr>
                    <tr>
                      <td>Noel Garbutt</td>
                      <td>7-11</td>
                      <td>1</td>
                      <td>56</td>
                      <td>2%</td>
                      <td>35.00</td>
                      <td>£3,428</td>
                      <td>19,486</td>
                    </tr>
                    <tr>
                      <td>Fergus Sweeney</td>
                      <td>8-8</td>
                      <td>1</td>
                      <td>110</td>
                      <td>1%</td>
                      <td>104.50</td>
                      <td>£7,762</td>
                      <td>38,101</td>
                    </tr>
                    <tr>
                      <td>Philip Prince</td>
                      <td>8-5</td>
                      <td>0</td>
                      <td>43</td>
                      <td>%</td>
                      <td>43.00</td>
                      <td>£</td>
                      <td>11,019</td>
                    </tr>
                    <tr>
                      <td>Paddy Bradley</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>39</td>
                      <td>%</td>
                      <td>39.00</td>
                      <td>£</td>
                      <td>8,962</td>
                    </tr>
                    <tr>
                      <td>Adrian McCarthy</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>36</td>
                      <td>%</td>
                      <td>36.00</td>
                      <td>£</td>
                      <td>15,816</td>
                    </tr>
                    <tr>
                      <td>Ray Dawson</td>
                      <td>8-2</td>
                      <td>0</td>
                      <td>35</td>
                      <td>%</td>
                      <td>35.00</td>
                      <td>£</td>
                      <td>9,221</td>
                    </tr>
                    <tr>
                      <td>Racheal Kneller</td>
                      <td>7-11</td>
                      <td>0</td>
                      <td>27</td>
                      <td>%</td>
                      <td>27.00</td>
                      <td>£</td>
                      <td>3,861</td>
                    </tr>
                    <tr>
                      <td>Josh Quinn</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>26</td>
                      <td>%</td>
                      <td>26.00</td>
                      <td>£</td>
                      <td>7,427</td>
                    </tr>
                    <tr>
                      <td>Gary Mahon</td>
                      <td>8-10</td>
                      <td>0</td>
                      <td>23</td>
                      <td>%</td>
                      <td>23.00</td>
                      <td>£</td>
                      <td>6,419</td>
                    </tr>
                    <tr>
                      <td>Ryan Powell</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>23</td>
                      <td>%</td>
                      <td>23.00</td>
                      <td>£</td>
                      <td>6,523</td>
                    </tr>
                    <tr>
                      <td>Nick Barratt-Atkin</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>22</td>
                      <td>%</td>
                      <td>22.00</td>
                      <td>£</td>
                      <td>7,750</td>
                    </tr>
                    <tr>
                      <td>Owen Payton</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>20</td>
                      <td>%</td>
                      <td>20.00</td>
                      <td>£</td>
                      <td>9,013</td>
                    </tr>
                    <tr>
                      <td>Russell Harris</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>18</td>
                      <td>%</td>
                      <td>18.00</td>
                      <td>£</td>
                      <td>4,283</td>
                    </tr>
                    <tr>
                      <td>Laura Pearson</td>
                      <td>7-10</td>
                      <td>0</td>
                      <td>18</td>
                      <td>%</td>
                      <td>18.00</td>
                      <td>£</td>
                      <td>3,642</td>
                    </tr>
                    <tr>
                      <td>Keelan Baker</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>17</td>
                      <td>%</td>
                      <td>17.00</td>
                      <td>£</td>
                      <td>1,781</td>
                    </tr>
                    <tr>
                      <td>Robert Dodsworth</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>17</td>
                      <td>%</td>
                      <td>17.00</td>
                      <td>£</td>
                      <td>4,031</td>
                    </tr>
                    <tr>
                      <td>Katherine Begley</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>15</td>
                      <td>%</td>
                      <td>15.00</td>
                      <td>£</td>
                      <td>3,220</td>
                    </tr>
                    <tr>
                      <td>W J Lee</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>15</td>
                      <td>%</td>
                      <td>15.00</td>
                      <td>£</td>
                      <td>76,176</td>
                    </tr>
                    <tr>
                      <td>James McDonald</td>
                      <td>8-8</td>
                      <td>0</td>
                      <td>15</td>
                      <td>%</td>
                      <td>15.00</td>
                      <td>£</td>
                      <td>62,818</td>
                    </tr>
                    <tr>
                      <td>R P Walsh</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>14</td>
                      <td>%</td>
                      <td>14.00</td>
                      <td>£</td>
                      <td>2,980</td>
                    </tr>
                    <tr>
                      <td>Michael Pitt</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>13</td>
                      <td>%</td>
                      <td>13.00</td>
                      <td>£</td>
                      <td>2,100</td>
                    </tr>
                    <tr>
                      <td>Ronan Whelan</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>12</td>
                      <td>%</td>
                      <td>12.00</td>
                      <td>£</td>
                      <td>6,855</td>
                    </tr>
                    <tr>
                      <td>Jessica Anderson</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>11</td>
                      <td>%</td>
                      <td>11.00</td>
                      <td>£</td>
                      <td>2,724</td>
                    </tr>
                    <tr>
                      <td>Sara Del Fabbro</td>
                      <td>7-9</td>
                      <td>0</td>
                      <td>11</td>
                      <td>%</td>
                      <td>11.00</td>
                      <td>£</td>
                      <td>5,427</td>
                    </tr>
                    <tr>
                      <td>Miss Michelle Mullineaux</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>11</td>
                      <td>%</td>
                      <td>11.00</td>
                      <td>£</td>
                      <td>3,583</td>
                    </tr>
                    <tr>
                      <td>Mr George Eddery</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>10</td>
                      <td>%</td>
                      <td>10.00</td>
                      <td>£</td>
                      <td>3,148</td>
                    </tr>
                    <tr>
                      <td>Christophe Soumillon</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>10</td>
                      <td>%</td>
                      <td>10.00</td>
                      <td>£</td>
                      <td>84,029</td>
                    </tr>
                    <tr>
                      <td>Jacob Clark</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>9</td>
                      <td>%</td>
                      <td>9.00</td>
                      <td>£</td>
                      <td>1,861</td>
                    </tr>
                    <tr>
                      <td>Rob J Fitzpatrick</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>9</td>
                      <td>%</td>
                      <td>9.00</td>
                      <td>£</td>
                      <td>1,657</td>
                    </tr>
                    <tr>
                      <td>Emma Taff</td>
                      <td>8-5</td>
                      <td>0</td>
                      <td>9</td>
                      <td>%</td>
                      <td>9.00</td>
                      <td>£</td>
                      <td>2,952</td>
                    </tr>
                    <tr>
                      <td>Lucy Alexander</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>8</td>
                      <td>%</td>
                      <td>8.00</td>
                      <td>£</td>
                      <td>1,300</td>
                    </tr>
                    <tr>
                      <td>Gina Mangan</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>8</td>
                      <td>%</td>
                      <td>8.00</td>
                      <td>£</td>
                      <td>2,174</td>
                    </tr>
                    <tr>
                      <td>Mr Ross Birkett</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>2,389</td>
                    </tr>
                    <tr>
                      <td>Gary Halpin</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>7,450</td>
                    </tr>
                    <tr>
                      <td>Miss Belinda Johnson</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>1,500</td>
                    </tr>
                    <tr>
                      <td>Leigh Roche</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>1,076</td>
                    </tr>
                    <tr>
                      <td>Mr Connor Wood</td>
                      <td>9-3</td>
                      <td>0</td>
                      <td>7</td>
                      <td>%</td>
                      <td>7.00</td>
                      <td>£</td>
                      <td>2,621</td>
                    </tr>
                    <tr>
                      <td>Ella Boardman</td>
                      <td>7-12</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Robbie Colgan</td>
                      <td>8-10</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>114,095</td>
                    </tr>
                    <tr>
                      <td>Jack Dinsmore</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>1,400</td>
                    </tr>
                    <tr>
                      <td>Kevin Lundie</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>1,377</td>
                    </tr>
                    <tr>
                      <td>Mollie Phillips</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>1,400</td>
                    </tr>
                    <tr>
                      <td>Aidan Redpath</td>
                      <td>7-12</td>
                      <td>0</td>
                      <td>6</td>
                      <td>%</td>
                      <td>6.00</td>
                      <td>£</td>
                      <td>1,661</td>
                    </tr>
                    <tr>
                      <td>P B Beggy</td>
                      <td>8-12</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>59,581</td>
                    </tr>
                    <tr>
                      <td>Nanako Fujita</td>
                      <td>7-10</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>10,620</td>
                    </tr>
                    <tr>
                      <td>Miss Alice Haynes</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>1,928</td>
                    </tr>
                    <tr>
                      <td>Miss Emma Jack</td>
                      <td>9-6</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Jamie Kah</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>18,000</td>
                    </tr>
                    <tr>
                      <td>Yuga Kawada</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>16,968</td>
                    </tr>
                    <tr>
                      <td>Mr Aidan Macdonald</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>1,500</td>
                    </tr>
                    <tr>
                      <td>Mr Henry Newcombe</td>
                      <td>9-13</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Brendan Powell</td>
                      <td>9-3</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>927</td>
                    </tr>
                    <tr>
                      <td>Miss Rachel Taylor</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>1,325</td>
                    </tr>
                    <tr>
                      <td>Adrie de Vries</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>5</td>
                      <td>%</td>
                      <td>5.00</td>
                      <td>£</td>
                      <td>12,684</td>
                    </tr>
                    <tr>
                      <td>Miss Sophie Coll</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>2,016</td>
                    </tr>
                    <tr>
                      <td>Miss Charlotte Crane</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Miss Chloe Dods</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,344</td>
                    </tr>
                    <tr>
                      <td>Mr Alex Edwards</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>2,567</td>
                    </tr>
                    <tr>
                      <td>Miss Julia Engstrom</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,057</td>
                    </tr>
                    <tr>
                      <td>Miss Jessica Gillam</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,200</td>
                    </tr>
                    <tr>
                      <td>Miss Paige Hopper</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>464</td>
                    </tr>
                    <tr>
                      <td>Rosie Jessop</td>
                      <td>8-2</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>2,764</td>
                    </tr>
                    <tr>
                      <td>Jamie Jones</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Mr Finbar Mulrine</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Mrs Dawn Scott</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Oliver Stammers</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>886</td>
                    </tr>
                    <tr>
                      <td>Miss Camilla Swift</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,115</td>
                    </tr>
                    <tr>
                      <td>Miss Millie Wonnacott</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>4</td>
                      <td>%</td>
                      <td>4.00</td>
                      <td>£</td>
                      <td>1,300</td>
                    </tr>
                    <tr>
                      <td>Mr Patrick Barlow</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Alice Bond</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Mr Alex Chadwick</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>1,158</td>
                    </tr>
                    <tr>
                      <td>Miss Alyson Deniel</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Mr Craig Dowson</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>870</td>
                    </tr>
                    <tr>
                      <td>Mr Sam Feilden</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>715</td>
                    </tr>
                    <tr>
                      <td>Tyler Gaffalione</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Liam Hamblett</td>
                      <td>9-3</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Antoine Hamelin</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Ryan Holmes</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>1,721</td>
                    </tr>
                    <tr>
                      <td>Cameron Iles</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>481</td>
                    </tr>
                    <tr>
                      <td>Mr Ciaran Jones</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Mr James King</td>
                      <td>10-11</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>1,118</td>
                    </tr>
                    <tr>
                      <td>Miss Georgia King</td>
                      <td>9-3</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Owen Lewis</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Joseph Lyons</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>899</td>
                    </tr>
                    <tr>
                      <td>Miss Claudia Metaireau</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>3,089</td>
                    </tr>
                    <tr>
                      <td>Mr Thomas Miles</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Jamie Neild</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Siobhan Rutledge</td>
                      <td>7-8</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>654</td>
                    </tr>
                    <tr>
                      <td>Mr Joshua Scott</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>464</td>
                    </tr>
                    <tr>
                      <td>Mr Nathan Seery</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>963</td>
                    </tr>
                    <tr>
                      <td>Mr Hakan Sensoy</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Maisie Sharp</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Miss Suzannah Stevens</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>2,776</td>
                    </tr>
                    <tr>
                      <td>John R Velazquez</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>3</td>
                      <td>%</td>
                      <td>3.00</td>
                      <td>£</td>
                      <td>23,650</td>
                    </tr>
                    <tr>
                      <td>Miss Kelly Adams</td>
                      <td>9-12</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Kerryanne Alexander</td>
                      <td>9-13</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Leighton Aspell</td>
                      <td>11-6</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,154</td>
                    </tr>
                    <tr>
                      <td>Harry Bannister</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Minty Bloss</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Matilda Blundell</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Miss Becky Brisbourne</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Michelle Bryant</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Rory Cleary</td>
                      <td>8-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Ben Coen</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Miss Helen Cuthbert</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Rachel Davies</td>
                      <td>9-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Sally Davison</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Sophie Dods</td>
                      <td>9-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>936</td>
                    </tr>
                    <tr>
                      <td>Mr Alex Ferguson</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,257</td>
                    </tr>
                    <tr>
                      <td>Miss Megan Fox</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,118</td>
                    </tr>
                    <tr>
                      <td>Page Fuller</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Mr Thomas Greenwood</td>
                      <td>10-10</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>558</td>
                    </tr>
                    <tr>
                      <td>Mr Marcus Haigh</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>483</td>
                    </tr>
                    <tr>
                      <td>Mr Sean Hawkins</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Sam Hitchcott</td>
                      <td>8-5</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Rosie Howarth</td>
                      <td>9-10</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Brian Hughes</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>577</td>
                    </tr>
                    <tr>
                      <td>Miss Rachel Huskisson</td>
                      <td>9-13</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Robert Law-Eadie</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Killian Leonard</td>
                      <td>8-1</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Miss Rosie Margarson</td>
                      <td>8-12</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>464</td>
                    </tr>
                    <tr>
                      <td>Conor Maxwell</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>344</td>
                    </tr>
                    <tr>
                      <td>Mr Guy Mitchell</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>700</td>
                    </tr>
                    <tr>
                      <td>Shariq Mohd</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Ms L O'Neill</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,208</td>
                    </tr>
                    <tr>
                      <td>Miss Jennifer Pahlman</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Lilly Pinchin</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>875</td>
                    </tr>
                    <tr>
                      <td>Mr Bradley Roberts</td>
                      <td>9-10</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>1,287</td>
                    </tr>
                    <tr>
                      <td>Gavin Ryan</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>600</td>
                    </tr>
                    <tr>
                      <td>Victoria Sanchez</td>
                      <td>8-9</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Nynke Schilder</td>
                      <td>9-12</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>800</td>
                    </tr>
                    <tr>
                      <td>Kayleigh Stephens</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>2,160</td>
                    </tr>
                    <tr>
                      <td>Miss Arabella Tucker</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Tamby Welch</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Sarah Williams</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>2</td>
                      <td>%</td>
                      <td>2.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Kit Alexander</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Gina Andrews</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,451</td>
                    </tr>
                    <tr>
                      <td>Mr Philip Armson</td>
                      <td>10-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Theo Bachelot</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>12,900</td>
                    </tr>
                    <tr>
                      <td>Miss Chelsea Banham</td>
                      <td>10-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>928</td>
                    </tr>
                    <tr>
                      <td>Gary Bardwell</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Colin Bolger</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Gaia Boni</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>James Bowen</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Ben Bromley</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Henry Brooke</td>
                      <td>10-8</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Oakley Brown</td>
                      <td>9-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Matt Brown</td>
                      <td>10-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>304</td>
                    </tr>
                    <tr>
                      <td>Imogen Carter</td>
                      <td>8-12</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,116</td>
                    </tr>
                    <tr>
                      <td>Bryan Carver</td>
                      <td>11-1</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Alain Cawley</td>
                      <td>11-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>2,330</td>
                    </tr>
                    <tr>
                      <td>Vincent Cheminaud</td>
                      <td>8-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Harry Cobden</td>
                      <td>11-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr J J Codd</td>
                      <td>11-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,160</td>
                    </tr>
                    <tr>
                      <td>Aidan Coleman</td>
                      <td>10-12</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Pam Du Crocq</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr John Dawson</td>
                      <td>11-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Oliver Daykin</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>483</td>
                    </tr>
                    <tr>
                      <td>Cristian Demuro</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Philip Donovan</td>
                      <td>9-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Joe Doyle</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>15,686</td>
                    </tr>
                    <tr>
                      <td>Mr J Dunne</td>
                      <td>10-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>928</td>
                    </tr>
                    <tr>
                      <td>Vlad Duric</td>
                      <td>9-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Shae Edwards</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Kieren Fallon</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>500</td>
                    </tr>
                    <tr>
                      <td>Noel Fehily</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>2,002</td>
                    </tr>
                    <tr>
                      <td>Mr Matthew Fielding</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Bryony Frost</td>
                      <td>10-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mark Gallagher</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,053</td>
                    </tr>
                    <tr>
                      <td>Miss Alex Garven</td>
                      <td>9-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Graham Gilbertson</td>
                      <td>10-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss C L Goodwin</td>
                      <td>10-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Mr George Gorman</td>
                      <td>10-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Maxime Guyon</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>14,492</td>
                    </tr>
                    <tr>
                      <td>Jamie Hamilton</td>
                      <td>10-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>4,660</td>
                    </tr>
                    <tr>
                      <td>Brian Harding</td>
                      <td>11-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Paddy Harnett</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,443</td>
                    </tr>
                    <tr>
                      <td>Luke Harvey</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Tyler Heard</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Miss Dawn Henry</td>
                      <td>9-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Conor Hoban</td>
                      <td>7-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Michael Hussey</td>
                      <td>8-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Daryl Jacob</td>
                      <td>11-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Barry Keniry</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Danny Kerr</td>
                      <td>10-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Connor King</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>582</td>
                    </tr>
                    <tr>
                      <td>Harriett Lees</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Kai Lenihan</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Jamie Mackay</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Kevin Manning</td>
                      <td>8-8</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Andrew McBride</td>
                      <td>9-13</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Nell McCann</td>
                      <td>10-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Nathan McCann</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>473</td>
                    </tr>
                    <tr>
                      <td>N G McCullagh</td>
                      <td>8-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>65,240</td>
                    </tr>
                    <tr>
                      <td>Derek McGaffin</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr L J McGuinness</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mikey Melia</td>
                      <td>8-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Marc Monaghan</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>10,105</td>
                    </tr>
                    <tr>
                      <td>Ms H Mooney</td>
                      <td>8-12</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Stephen Mooney</td>
                      <td>8-4</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>924</td>
                    </tr>
                    <tr>
                      <td>Timmy Murphy</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Adrian Nicholls</td>
                      <td>11-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,000</td>
                    </tr>
                    <tr>
                      <td>Miss A B O'Connor</td>
                      <td>9-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>968</td>
                    </tr>
                    <tr>
                      <td>Mr Anthony O'Neill</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Erika Parkinson</td>
                      <td>8-6</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>481</td>
                    </tr>
                    <tr>
                      <td>Ollie Pears</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr Will Pettis</td>
                      <td>10-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>Mr Charlie Pike</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>464</td>
                    </tr>
                    <tr>
                      <td>Charlie Poste</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mrs Charlotte Pownall</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Jack Quinlan</td>
                      <td>11-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Mr Niall Reynolds</td>
                      <td>9-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Joel Rosario</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Nick Scholfield</td>
                      <td>10-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Tom Scudamore</td>
                      <td>10-13</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>292</td>
                    </tr>
                    <tr>
                      <td>Miss Rachel Sharpe</td>
                      <td>10-13</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Victoria Smith</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Miss Danielle Smith</td>
                      <td>9-12</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>512</td>
                    </tr>
                    <tr>
                      <td>Mr Liam Spencer</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Lewis Stones</td>
                      <td>9-8</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Yutaka Take</td>
                      <td>8-3</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>10,125</td>
                    </tr>
                    <tr>
                      <td>Caitlin Taylor</td>
                      <td>8-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mr J Teal</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,450</td>
                    </tr>
                    <tr>
                      <td>Mr William Thirlby</td>
                      <td>10-9</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Andrew Thornton</td>
                      <td>11-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Andrew Tinkler</td>
                      <td>10-5</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Sam Twiston-Davies</td>
                      <td>10-0</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Dr Misha Voikhansky</td>
                      <td>9-11</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Adam Wedge</td>
                      <td>11-2</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>Kielan Woods</td>
                      <td>10-7</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td>1,165</td>
                    </tr>
                    <tr>
                      <td>Tabitha Worsley</td>
                      <td>10-1</td>
                      <td>0</td>
                      <td>1</td>
                      <td>%</td>
                      <td>1.00</td>
                      <td>£</td>
                      <td></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <td colspan="8">
                        <a href="#" class="championship-table__more">More...</a>
                      </td>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section>

    <?php elseif ( get_row_layout() == 'partners' ): ?>

      <section class="s-partners">
        <div class="container">
          <?php $title = get_sub_field( 'title' );
          if ($title): ?>
            <h2 class="section-title"><?php echo $title; ?></h2>
          <?php endif; ?>

          <?php $partners = get_any_post( 'partner', -1 );
          if ($partners->have_posts()): ?>
            <div class="partners">
              <?php while ($partners->have_posts()): $partners->the_post(); ?>
                <div class="partners__item">
                  <?php the_post_thumbnail('full'); ?>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
          <?php endif; ?>
        </div>
      </section>

    <?php endif;

  endwhile;
endif; ?>

<?php get_footer();