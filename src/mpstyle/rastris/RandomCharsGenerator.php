<?php

namespace mpstyle\rastris;

/**
 * Class RandomCharsGenerator collects methods to create random string using different subset of characters.
 */
class RandomCharsGenerator
{
    const CHARACTERS = '\|!"£$%&/()=?^+*§°ç@-.,;_<>€[]{}abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const ALPHA = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const LOWER_ALPHA = 'abcdefghijklmnopqrstuvwxyz';
    const UPPER_ALPHA = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const DIGITS = '1234567890';

    /**
     * Generates a random string using these characters: '\|!"£$%&/()=?^+*§°ç@-.,;_<>€[]{}abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
     * The string will have length <i>$length</i>.
     *
     * @param int $length
     * @return string
     */
    public function get(int $length)
    {
        return $this->generate($length, self::CHARACTERS);
    }

    /**
     * Generates a random string using these characters: 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'.
     * The string will have length <i>$length</i>.
     *
     * @param int $length
     * @return string
     */
    public function getAlphas(int $length)
    {
        return $this->generate($length, self::ALPHA);
    }

    /**
     * Generates a random string using these characters: 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
     * The string will have length <i>$length</i>.
     *
     * @param int $length
     * @return string
     */
    public function getUpperAlphas(int $length)
    {
        return $this->generate($length, self::UPPER_ALPHA);
    }

    /**
     * Generates a random string using these characters: 'abcdefghijklmnopqrstuvwxyz'.
     * The string will have length <i>$length</i>.
     *
     * @param int $length
     * @return string
     */
    public function getLowerAlphas(int $length)
    {
        return $this->generate($length, self::LOWER_ALPHA);
    }

    /**
     * Generates a random string using these characters: '\|!"£$%&/()=?^+*§°ç@-.,;_<>€[]{}abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
     * The string will have length <i>$length</i>.
     *
     * @param int $length
     * @return string
     */
    public function getDigits(int $length)
    {
        return $this->generate($length, self::DIGITS);
    }

    /**
     * Generates a random string using the subset of characters <i>$charSet</i>.
     * The string will have length <i>$length</i>.
     *
     * @param int $length
     * @param string $charSet
     * @return string
     */
    public function generate(int $length, string $charSet)
    {
        $string = '';
        $max = strlen($charSet) - 1;
        for ($i = 0; $i < $length; $i++) {
            $string .= $charSet[mt_rand(0, $max)];
        }

        return $string;
    }
}