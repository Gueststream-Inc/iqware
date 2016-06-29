<?php

namespace Gueststream\PMS\IQWare\API;

class News
{

    /**
     * @var int $ID_Article
     */
    protected $ID_Article = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var string $ArticleName
     */
    protected $ArticleName = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var int $ViewOrder
     */
    protected $ViewOrder = null;

    /**
     * @param int $ID_Article
     * @param \DateTime $CreationDate
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     * @param string $ArticleName
     * @param string $Title
     * @param string $Content
     * @param int $ViewOrder
     */
    public function __construct($ID_Article, \DateTime $CreationDate, \DateTime $FromDate, \DateTime $ToDate, $ArticleName, $Title, $Content, $ViewOrder)
    {
        $this->ID_Article = $ID_Article;
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
        $this->ArticleName = $ArticleName;
        $this->Title = $Title;
        $this->Content = $Content;
        $this->ViewOrder = $ViewOrder;
    }

    /**
     * @return int
     */
    public function getID_Article()
    {
        return $this->ID_Article;
    }

    /**
     * @param int $ID_Article
     * @return \Gueststream\PMS\IQWare\API\News
     */
    public function setID_Article($ID_Article)
    {
        $this->ID_Article = $ID_Article;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        if ($this->CreationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CreationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \Gueststream\PMS\IQWare\API\News
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
        if ($this->FromDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->FromDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FromDate
     * @return \Gueststream\PMS\IQWare\API\News
     */
    public function setFromDate(\DateTime $FromDate)
    {
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
        if ($this->ToDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ToDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ToDate
     * @return \Gueststream\PMS\IQWare\API\News
     */
    public function setToDate(\DateTime $ToDate)
    {
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getArticleName()
    {
        return $this->ArticleName;
    }

    /**
     * @param string $ArticleName
     * @return \Gueststream\PMS\IQWare\API\News
     */
    public function setArticleName($ArticleName)
    {
        $this->ArticleName = $ArticleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return \Gueststream\PMS\IQWare\API\News
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param string $Content
     * @return \Gueststream\PMS\IQWare\API\News
     */
    public function setContent($Content)
    {
        $this->Content = $Content;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewOrder()
    {
        return $this->ViewOrder;
    }

    /**
     * @param int $ViewOrder
     * @return \Gueststream\PMS\IQWare\API\News
     */
    public function setViewOrder($ViewOrder)
    {
        $this->ViewOrder = $ViewOrder;
        return $this;
    }
}
