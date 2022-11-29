
    <header class="header">
    <div class="container">
        <ul class="social-icons pt-3">
        <?php
            $config = get_option('_prefix_my_options');
            $string_converter_social = $config['opt-social'];
        ?>
            <?php
                // Loop For Icon
                if($config['opt-social']){
                    foreach($config['opt-social'] as $social_field){
                        ?>
                            <li class="social-item"><a class="social-link text-light" href="<?php echo $social_field['opt-social-url'];?>">
                            <i class="<?php echo $social_field['opt-social-icon'];?>" aria-hidden="true"></i></a></li>
                        <?php
                    }
                }
            ?>
            <!-- <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li> -->
        </ul>  
        <div class="header-content">
            <h4 class="header-subtitle" >Hello, I am</h4>
            <h1 class="header-title">John Doe</h1>
            <h6 class="header-mono" >Frond end Designer | Developer</h6>
            <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
        </div>
    </div>
    </header>
