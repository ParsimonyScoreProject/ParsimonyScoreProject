<?php

namespace PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScoreTMP
 *
 * @ORM\Table(name="score_t_m_p")
 * @ORM\Entity(repositoryClass="PagesBundle\Repository\ScoreTMPRepository")
 */
class ScoreTMP
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

	/**
     * @var string
     *
     * @ORM\Column(name="problem", type="string", length=50)
     */
    private $problem;

    /**
     * @var int
     *
     * @ORM\Column(name="k", type="integer", nullable=true)
     */
    private $k;

    /**
     * @var int
     *
     * @ORM\Column(name="l", type="integer", nullable=true)
     */
    private $l;

    /**
     * @var int
     *
     * @ORM\Column(name="r", type="integer", nullable=true)
     */
    private $r;

    /**
     * @var int
     *
     * @ORM\Column(name="n", type="integer", nullable=true)
     */
    private $n;

    /**
     * @var int
     *
     * @ORM\Column(name="g", type="integer", nullable=true)
     */
    private $g;

    /**
     * @var int
     *
     * @ORM\Column(name="b", type="integer", nullable=true)
     */
    private $b;

    /**
     * @var int
     *
     * @ORM\Column(name="s", type="integer", nullable=true)
     */
    private $s;

    /**
     * @var float
     *
     * @ORM\Column(name="rn", type="float", nullable=true)
     */
    private $rn;

    /**
     * @var float
     *
     * @ORM\Column(name="rg", type="float", nullable=true)
     */
    private $rg;

    /**
     * @var float
     *
     * @ORM\Column(name="rb", type="float", nullable=true)
     */
    private $rb;

    /**
     * @var float
     *
     * @ORM\Column(name="nb", type="float", nullable=true)
     */
    private $nb;

    /**
     * @var float
     *
     * @ORM\Column(name="ng", type="float", nullable=true)
     */
    private $ng;
	
    /**
     * @var float
     *
     * @ORM\Column(name="gb", type="float", nullable=true)
     */
    private $gb;

	/**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=50)
     */
    private $file_name;
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set problem
     *
     * @param string $problem
     * @return ScoreTMP
     */
    public function setProblem($problem)
    {
        $this->problem = $problem;
    
        return $this;
    }

    /**
     * Get problem
     *
     * @return string 
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Set k
     *
     * @param integer $k
     * @return ScoreTMP
     */
    public function setK($k)
    {
        $this->k = $k;
    
        return $this;
    }

    /**
     * Get k
     *
     * @return integer 
     */
    public function getK()
    {
        return $this->k;
    }

    /**
     * Set l
     *
     * @param integer $l
     * @return ScoreTMP
     */
    public function setL($l)
    {
        $this->l = $l;
    
        return $this;
    }

    /**
     * Get l
     *
     * @return integer 
     */
    public function getL()
    {
        return $this->l;
    }

    /**
     * Set r
     *
     * @param integer $r
     * @return ScoreTMP
     */
    public function setR($r)
    {
        $this->r = $r;
    
        return $this;
    }

    /**
     * Get r
     *
     * @return integer 
     */
    public function getR()
    {
        return $this->r;
    }

    /**
     * Set n
     *
     * @param integer $n
     * @return ScoreTMP
     */
    public function setN($n)
    {
        $this->n = $n;
    
        return $this;
    }

    /**
     * Get n
     *
     * @return integer 
     */
    public function getN()
    {
        return $this->n;
    }

    /**
     * Set g
     *
     * @param integer $g
     * @return ScoreTMP
     */
    public function setG($g)
    {
        $this->g = $g;
    
        return $this;
    }

    /**
     * Get g
     *
     * @return integer 
     */
    public function getG()
    {
        return $this->g;
    }

    /**
     * Set b
     *
     * @param integer $b
     * @return ScoreTMP
     */
    public function setB($b)
    {
        $this->b = $b;
    
        return $this;
    }

    /**
     * Get b
     *
     * @return integer 
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Set s
     *
     * @param integer $s
     * @return ScoreTMP
     */
    public function setS($s)
    {
        $this->s = $s;
    
        return $this;
    }

    /**
     * Get s
     *
     * @return integer 
     */
    public function getS()
    {
        return $this->s;
    }


    /**
     * Set file_name
     *
     * @param string $fileName
     * @return ScoreTMP
     */
    public function setFileName($fileName)
    {
        $this->file_name = $fileName;
    
        return $this;
    }

    /**
     * Get file_name
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->file_name;
    }


    /**
     * Set rn
     *
     * @param float $rn
     * @return ScoreTMP
     */
    public function setRn($rn)
    {
        $this->rn = $rn;

        return $this;
    }

    /**
     * Get rn
     *
     * @return float 
     */
    public function getRn()
    {
        return $this->rn;
    }

    /**
     * Set rg
     *
     * @param float $rg
     * @return ScoreTMP
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return float 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set rb
     *
     * @param float $rb
     * @return ScoreTMP
     */
    public function setRb($rb)
    {
        $this->rb = $rb;

        return $this;
    }

    /**
     * Get rb
     *
     * @return float 
     */
    public function getRb()
    {
        return $this->rb;
    }

    /**
     * Set nb
     *
     * @param float $nb
     * @return ScoreTMP
     */
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }

    /**
     * Get nb
     *
     * @return float 
     */
    public function getNb()
    {
        return $this->nb;
    }

    /**
     * Set ng
     *
     * @param float $ng
     * @return ScoreTMP
     */
    public function setNg($ng)
    {
        $this->ng = $ng;

        return $this;
    }

    /**
     * Get ng
     *
     * @return float 
     */
    public function getNg()
    {
        return $this->ng;
    }

    /**
     * Set gb
     *
     * @param float $gb
     * @return ScoreTMP
     */
    public function setGb($gb)
    {
        $this->gb = $gb;

        return $this;
    }

    /**
     * Get gb
     *
     * @return float 
     */
    public function getGb()
    {
        return $this->gb;
    }
}
