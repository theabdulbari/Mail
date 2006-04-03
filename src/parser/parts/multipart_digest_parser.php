<?php
/**
 * File containing the ezcMailMultipartDigestParser class
 *
 * @package Mail
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Parses multipart/digest mail parts.
 *
 * @access private
 */
class ezcMailMultipartDigestParser extends ezcMailMultipartParser
{
    /**
     * Holds the ezcMailMultipartDigest part corresponding to the data parsed with this parser.
     *
     * @var ezcMailMultipartDigest
     */
    private $part = null;

    /**
     * Constructs a new ezcMailMultipartDigestParser.
     */
    public function __construct( ezcMailHeadersHolder $headers )
    {
        parent::__construct( $headers );
        $this->part = new ezcMailMultipartDigest();
    }

    /**
     * Adds the part $part to the list of multipart messages.
     *
     * This method is called automatically by ezcMailMultipartParser
     * each time a part is parsed.
     *
     * @param ezcMailPart $part
     * @return void
     */
    public function partDone( ezcMailPart $part )
    {
        $this->part->appendPart( $part );
    }

    /**
     * Returns the parts parsed for this multipart.
     *
     * @return ezcMailMultipartDigest
     */
    public function finishMultipart()
    {
        return $this->part;
    }
}

?>