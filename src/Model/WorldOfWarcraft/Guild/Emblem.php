<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Guild;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Emblem class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Emblem extends AbstractModel
{
    /**
     * @var int $icon Icon
     */
    private $icon;

    /**
     * @var string $iconColor Icon color
     */
    private $iconColor;

    /**
     * @var int $border Border
     */
    private $border;

    /**
     * @var string $borderColor Border color
     */
    private $borderColor;

    /**
     * @var string $backgroundColor Background color
     */
    private $backgroundColor;

    /**
     * Get icon
     *
     * @return int Icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set icon
     *
     * @param int $icon Icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon color
     *
     * @return string Icon color
     */
    public function getIconColor()
    {
        return $this->iconColor;
    }

    /**
     * Set icon color
     *
     * @param string $iconColor Icon color
     *
     * @return $this
     */
    public function setIconColor($iconColor)
    {
        $this->iconColor = $iconColor;

        return $this;
    }

    /**
     * Get border
     *
     * @return int Border
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * Set border
     *
     * @param int $border Border
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->border = $border;

        return $this;
    }

    /**
     * Get border color
     *
     * @return string Border color
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * Set border color
     *
     * @param string $borderColor Border color
     *
     * @return $this
     */
    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;

        return $this;
    }

    /**
     * Get background color
     *
     * @return string Background color
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * Set background color
     *
     * @param string $backgroundColor Background color
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setIcon($data['icon'])
             ->setIconColor($data['iconColor'])
             ->setBorder($data['border'])
             ->setBorderColor($data['borderColor'])
             ->setBackgroundColor($data['backgroundColor']);

        return $this;
    }
}
