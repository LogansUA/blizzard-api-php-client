<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class Spec
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Spec extends AbstractModel
{
    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var string $role Role
     */
    private $role;

    /**
     * @var string $backgroundImage Background image
     */
    private $backgroundImage;

    /**
     * @var string $icon Icon
     */
    private $icon;

    /**
     * @var string $description Description
     */
    private $description;

    /**
     * @var int $order Order
     */
    private $order;

    /**
     * Get name
     *
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get role
     *
     * @return string Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set role
     *
     * @param string $role Role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get background image
     *
     * @return string Background image
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    /**
     * Set background image
     *
     * @param string $backgroundImage Background image
     *
     * @return $this
     */
    public function setBackgroundImage($backgroundImage)
    {
        $this->backgroundImage = $backgroundImage;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string Icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set icon
     *
     * @param string $icon Icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get description
     *
     * @return string Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get order
     *
     * @return int Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set order
     *
     * @param int $order Order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setName($data['name'])
             ->setRole($data['role'])
             ->setBackgroundImage($data['backgroundImage'])
             ->setIcon($data['icon'])
             ->setDescription($data['description'])
             ->setOrder($data['order']);

        return $this;
    }
}
