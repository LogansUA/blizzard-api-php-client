<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class Member
 *
 * @todo Rename, because it's only Chllenge model
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Member extends AbstractModel
{
    /**
     * @var Character $character Character
     */
    private $character;

    /**
     * @var Spec $spec Challenge spec
     */
    private $spec;

    /**
     * Get character
     *
     * @return Character Character
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Set character
     *
     * @param Character $character Character
     *
     * @return $this
     */
    public function setCharacter(Character $character)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get spec
     *
     * @return Spec Spec
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * Set spec
     *
     * @param Spec $spec Spec
     *
     * @return $this
     */
    public function setSpec(Spec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        if (isset($data['character'])) {
            $this->setCharacter((new Character())->fillObject($data['character']));
        }

        $this->setSpec((new Spec())->fillObject($data['spec']));

        return $this;
    }
}
