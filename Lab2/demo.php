<?php
declare(strict_types=1);

// Nhúng các file cần thiết
include 'I.php';
include 'C.php';
include 'A.php';
include 'B.php';


class Demo {
    // Trả về đối tượng A
    public function typeAReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeAReturnC(): I {
        echo __FUNCTION__ . "<br>";
         return new C();
    }
    public function typeAReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeAReturnnull(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    // B
    public function typeBReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeBReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeBReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeBReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeBReturnnull(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    //C
    public function typeCReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeCReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeCReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeCReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeCReturnnull(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    //I
    public function typeIReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeIReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeIReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typenullReturn(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeIReturnnull(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    //NULL
    public function typenullReturnnull(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    public function typenullReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typenullReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typenullReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typenullReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

}
// Tạo đối tượng từ class Demo và gọi các phương thức
$demo = new Demo();

//A
$aInstance = $demo->typeAReturnA();
$aInstance->f(); 
$bInstance = $demo->typeAReturnB();
$bInstance->f(); 
$aInstance = $demo->typeAReturnC();
$aInstance->f(); 
$bInstance = $demo->typeAReturnI();
$bInstance->f(); 
$aInstance = $demo->typeAReturnnull();
$aInstance->f(); 
//B
$bInstance = $demo->typeBReturnB();
$bInstance->f(); 
$bInstance = $demo->typeBReturnA();
$bInstance->f(); 
$bInstance = $demo->typeBReturnC();
$bInstance->f(); 
$bInstance = $demo->typeBReturnI();
$bInstance->f(); 
$bInstance = $demo->typeBReturnnull();
$bInstance->f(); 
//C
$bInstance = $demo->typeCReturnC();
$bInstance->f(); 
$bInstance = $demo->typeCReturnA();
$bInstance->f(); 
$bInstance = $demo->typeCReturnB();
$bInstance->f(); 
$bInstance = $demo->typeCReturnI();
$bInstance->f(); 
$bInstance = $demo->typeCReturnnull();
$bInstance->f(); 
//I
$bInstance = $demo->typeIReturnI();
$bInstance->f(); 
$bInstance = $demo->typeIReturnA();
$bInstance->f(); 
$bInstance = $demo->typeIReturnB();
$bInstance->f(); 
$bInstance = $demo->typeIReturnC();
$bInstance->f(); 
$bInstance = $demo->typeIReturnnull();
$bInstance->f(); 
//null
$bInstance = $demo->typenullReturnnull();
$bInstance->f(); 
$bInstance = $demo->typenullReturnA();
$bInstance->f(); 
$bInstance = $demo->typenullReturnB();
$bInstance->f(); 
$bInstance = $demo->typenullReturnC();
$bInstance->f(); 
$bInstance = $demo->typenullReturnI();
$bInstance->f(); 

?>
