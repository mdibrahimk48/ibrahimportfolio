
    <header class="header">
    <div class="container">
        <ul class="social-icons pt-3">
        <?php
            $config = get_option('_prefix_my_options');
            $string_converter_social = $config['opt-social'];
            $string_converter_hero = $config['opt-hero'];
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
            <h4 class="header-subtitle" ><?php echo $string_converter_hero['opt-wlctitle']; ?></h4>
            <h1 class="header-title"><?php echo $string_converter_hero['opt-heroname']; ?></h1>
            <h6 class="header-mono" ><?php echo $string_converter_hero['opt-herodesignation']; ?></h6>
            <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i><?php echo $string_converter_hero['opt-btntitle']; ?></button>
        </div>
    </div>
    </header>
