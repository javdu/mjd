<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Pregunta_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function totalPregunta()
        {
            $this->db->from('tpregunta');
            
            return $this->db->count_all_results();
        }
        
        public function obtenerTodos($offset, $limit)
        {
            $this->db->limit($limit, $offset);
            $aPregunta = $this->db->get('tpregunta')->result_array();
            
            $this->db->select(
                'tpregresp.idpregresp, 
                 tpregresp.idpregunta,
                 trespuesta.idrespuesta,
                 trespuesta.vcrespnombre'
            );
            $this->db->from('tpregresp');
            $this->db->join('trespuesta', 'trespuesta.idrespuesta = tpregresp.idrespuesta');
            $aRespuesta = $this->db->get()->result_array();
            
            
            
            $auxPregunta = array();
            $auxRespuesta = array();
            foreach($aPregunta as $pregunta):
                $auxPregunta[$pregunta['idpregunta']] = $pregunta;
                foreach($aRespuesta as $respuesta):
                    if ($pregunta['idpregunta'] == $respuesta['idpregunta']):
                        $auxRespuesta[] = array(
                            'idrespuesta' => $respuesta['idrespuesta'],
                            'vcrespnombre' => $respuesta['vcrespnombre']
                        );
                    endif;
                endforeach;
                $auxPregunta[$pregunta['idpregunta']]['respuestas'] = $auxRespuesta;
                $auxRespuesta = array();
            endforeach;
            
            return $auxPregunta;
        }
    }
// EOF parentesco_model.php