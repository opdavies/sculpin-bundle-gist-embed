<?php

namespace Opdavies\Sculpin\Bundle\GistEmbedBundle\Twig;

use Twig_Environment;
use Twig_Extension;
use Twig_SimpleFunction;

class GistEmbedExtension extends Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('gist', [$this, 'gist'], [
                'is_safe' => ['html']
            ]),
        ];
    }

    /**
     * Render a Gist.
     *
     * @param string $gistId
     * @param string $filename
     *
     * @return string
     */
    public function gist($gistId, $filename)
    {
        return sprintf(
            '<code data-gist-id="%s" data-gist-file="%s"></code>',
            $gistId,
            $filename
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sculpin_gist_embed';
    }

}
