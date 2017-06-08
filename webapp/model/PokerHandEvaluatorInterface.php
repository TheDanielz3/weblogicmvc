<?php
/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 11-05-2017
 * Time: 13:07
 */

/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 11-05-2017
 * Time: 12:58
 */
interface PokerHandEvaluatorInterface
{
    public function evaluateHand(array $hand);

    public function getPrize($bet);
}