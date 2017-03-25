<?php

namespace Statamic\Addons\BootstrapVideoEmbed;

use Statamic\Extend\Tags;

class BootstrapVideoEmbedTags extends Tags
{
    /**
     * The {{ bootstrap_video_embed }} tag
     *
     * @return string|array
     */
    public function index()
    {
        $value = $this->getParam('src');
        $height = $this->getParam('height');
        $width = $this->getParam('width');
        $autoplay = $this->getParam('autoplay', null);
        $loop = $this->getParam('loop', null);
        $api = $this->getParam('api', null);
        $showinfo = $this->getParam('showinfo', null);
        $controls = $this->getParam('controls', null);

        $aspect_ratio = $this->api('VideoEmbed')->getAspectRatio($height, $width);
        $src = $this->api('VideoEmbed')->getVideoSrc($value, $autoplay, $loop, $api, $showinfo, $controls);

        if ($aspect_ratio == 'cinema' || $aspect_ratio == 'wide' || $aspect_ratio == 'clasic')
        {
            $aspect_ratio_class = 'embed-responsive-16by9';
        }
        else
        {
            $aspect_ratio_class = 'embed-responsive-4by3';
        }

        return  '<div class="embed-responsive ' . $aspect_ratio_class . '"><iframe class="embed-responsive-item" src="' . $src . '"></iframe></div>';
    }
}
