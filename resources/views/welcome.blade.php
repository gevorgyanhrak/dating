@extends('layouts.site')

@section('content')

<!-----Slider---->
<section id="slider" class="slider">
    <div class="container">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <img src="site/img/slider.png" class="img-responsive  hidden-xs">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="register-form">
                <h1>Votre site de tchatche #1 entre Travailleurs</h1>
                <h3><span style="color: #fff"><strong>Inscrivez-vous c'est gratuit</strong></span><span><br/></span>
                </h3>
                <p><span>Voulez-vous une aventure de rencontre, amiti&eacute;, compagnons, vous sentez la solitude et besoin de distraction? C'est gratuit! <span
                            style="color: rgb(255, 0, 0);">Inscrivez-vous</span></span></p>
            </div>
            <form method="post" action="/search" class="form-inline">
                @csrf
                <div class="row mar-btm20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">I am a</label>
                            <select  name="gender_1" class="minimal">
                                <option value="" selected="selected">Select Gender</option>
                                <option value="1">Man</option>
                                <option value="2">Woman</option>
                                <option value="0">No wrapper</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Seeking a</label>
                            <select  name="gender_2" class="minimal">
                                <option value="" selected="selected">Select Gender</option>
                                <option value="1">Man</option>
                                <option value="2">Woman</option>
                                <option value="0">No wrapper</option>
                            </select>
                        </div>

                    </div>

                </div>
                <div class="row mar-btm20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Ages</label>
                            <select  name="age_1" class="minimal">
                                <option value="" selected="selected">Select Age</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65">65</option>
                                <option value="66">66</option>
                                <option value="67">67</option>
                                <option value="68">68</option>
                                <option value="69">69</option>
                                <option value="70">70</option>
                                <option value="71">71</option>
                                <option value="72">72</option>
                                <option value="73">73</option>
                                <option value="74">74</option>
                                <option value="75">75</option>
                                <option value="76">76</option>
                                <option value="77">77</option>
                                <option value="78">78</option>
                                <option value="79">79</option>
                                <option value="80">80</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">to</label>
                            <select name="age_2" class="minimal">
                                <option value="" selected="selected">Select Age</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65">65</option>
                                <option value="66">66</option>
                                <option value="67">67</option>
                                <option value="68">68</option>
                                <option value="69">69</option>
                                <option value="70">70</option>
                                <option value="71">71</option>
                                <option value="72">72</option>
                                <option value="73">73</option>
                                <option value="74">74</option>
                                <option value="75">75</option>
                                <option value="76">76</option>
                                <option value="77">77</option>
                                <option value="78">78</option>
                                <option value="79">79</option>
                                <option value="80">80</option>
                            </select>
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn btn btn-labeled btn-submit"><span class="btn-label1"><i
                            class="fa fa-heart" aria-hidden="true"></i></span> Entrée
                </button>
            </form>
        </div>

    </div>
</section>

<div class="container members  hidden-xs">
    <div class="col-md-6 col-xs-12">
        <h2>Advertising space to hire</h2>
        <h3>
            <Rencontres &amp; entre hommes et femmes resposable
        </h3>

    </div>
    <div class="col-md-1 col-xs-12 gosecondpage"><img src="site/img/gosecondpage.png"
                                                      class="animated infinite bounceIn"></div>
    <div class="col-md-5 col-xs-12">
        <div class="col-md-6 online">1248762<br><span>Online Now!</span></div>
        <div class="col-md-6 total">22928271<br><span>Matches !</span></div>

    </div>
</div>

<!-- OWL carousel -->
<div class="container members-box ">
    <div class="owl-carousel">

        <div class="card-container">
            <span class="pro">PRO</span>
            <div class="img_wrap">
                <img src="site/img/1.png" class="img-responsive" alt="user"/>
            </div>
            <h3>Kim</h3>
            <h6>Nodia, U.P.</h6>
            <p>Age - 25</p>
            <div class="buttons">
                <button class="primary">
                    Message
                </button>
                <button class="primary ghost">
                    Following
                </button>
            </div>
            <div class="skills">
                <h6>Info</h6>
                <ul>
                    <li>Age - 25</li>
                    <li>Gender - Female</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>



<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>

<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>

<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>

<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>

<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>

<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>

<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>

<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>

<section class="seen hidden-xs">
    <div class="container">
        <h2>ADVERTISING SPACE TO HIRE</h2>
        <div class="animated fadeIn media-box">
            <img src="site/img/links.png" class="img-responsive">
        </div>
    </div>
</section>

<section class="des">
    <div class="container">
        <h1>#1 Online Rich Dating Site &amp; Millionaire Matchmaker Club for Wealthy and Attractive Singles.</h1>
        <h4>Most Popular and Fastest Growing Millionaire Dating Site</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy
            text ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book. It has survived not
            only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with
            the release of Letraset sheets containing Lorem Ipsum passages, and more
            recently with desktop publishing software like Aldus PageMaker
            including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of
            the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen
            book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was
            popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem
            Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining
            essentially unchanged. It was popularised in the 1960s with the release
            of Letraset sheets containing Lorem Ipsum passages, and more recently
            with desktop publishing software like Aldus PageMaker including versions
            of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy
            text ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book. It has survived not
            only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with
            the release of Letraset sheets containing Lorem Ipsum passages, and more
            recently with desktop publishing software like Aldus PageMaker
            including versions of Lorem Ipsum.</p>
    </div>
</section>

@endsection
