<?php

/**
 * Created by PhpStorm.
 * User: volodymyr
 * Date: 30.10.16
 * Time: 9:32
 */

namespace lesson2\classes;

class Television extends Model   implements Consol, Ports
{
  public  function on()
    {
        echo "on<br/>";
    }

  public function off()
    {
        echo "off<br/>";
    }

  public  function color()
    {
        // TODO: Implement color() method.
    }

  public  function volume()
    {
        // TODO: Implement volume() method.
    }

  public  function channel()
    {
        // TODO: Implement channel() method.
    }

    public function usb()
    {
        // TODO: Implement Usb() method.
    }

   public function hdmi()
    {
        // TODO: Implement Hdmi() method.
    }

}

