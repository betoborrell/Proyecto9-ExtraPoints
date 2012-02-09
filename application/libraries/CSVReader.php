<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * CSVReader Class
 * 
 */
class CSVReader {
    
    var $separator = ',';    /** separator used to explode each line */
    var $max_row_size = 4096;    /** maximum row size to be used for decoding */
    
    /**
     * Parse a file containing CSV formatted data.
     * @return    array
     */
    function parse_file($p_Filepath) {
        $content = array();
        $cont = 0;
        
        ini_set("auto_detect_line_endings", "1");
        
        $file = fopen($p_Filepath, 'r');
        while( ($row = fgetcsv($file, $this->max_row_size, $this->separator)) !== false ) {            
            if( $row[0] != null ) { // skip empty lines
                
               	$content[] = $row;
               	
            }
        }
        fclose($file);
		return $content;
    }
}
?> 