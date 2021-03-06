<?php

/**
 * Unit test for ProtectedPropertiesAreNotAllowedSniff
 *
 * @author Nico Schoenmaker <nschoenmaker@hostnet.nl>
 */
class Hostnet_Tests_Classes_OnlyOneUseStatementPerLineUnitTest extends Hostnet_Tests_AbstractPHPCSBridge
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array(int => int)
     */
    public function getErrorList($filename = null)
    {
        return array(4 => 1, 5 => 1, 7 => 1);
    }

    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array(int => int)
     */
    public function getWarningList()
    {
        return array();
    }
}
