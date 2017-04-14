<?php
defined('BASEPATH') OR exit('No direct script access allowed ');


class Visitor {
	private function countervisitor() {
		if($this->agent->is_browser()) {
			$agent = $this->agent->browser().' '.$this->agent->version();
		} elseif ($this->agent->is_robot()) {
			$agent = $this->agent->robot();
		} elseif ($this->agent->is_mobile()) {
			$agent = $this->agent->mobile();
		} else {
			$agent = 'Unidentified User Agent';
		}
		
		$data_visitor = $this->Visitor_Model->GetVisitor("where ip = '".$_SERVER['REMOTE_ADDR']."'")->result_array();

		if($data_visitor == NULL) {
			$data = array(
				'ip' => $_SERVER['REMOTE_ADDR'],
				'os' => $this->agent->platform(),
				'browser' => $agent,
				'tanggal' => date("Y-m-d H:i:s")
			);
			$this->Visitor_Model->InsertData('visitor',$data);
			$this->session->set_userdata('pranataindonesia.ac.id',"Admin PORTAL");
			setcookie("pranataindonesia_ac_id",'', time()+3600*24);
		} else {
			if(!isset($_COOKIE['pranataindonesia_ac_id'])) {
				$data_visitor = $this->Visitor_Model->GetVisitor("where ip = '".$_SERVER['REMOTE_ADDR']."' and tanggal = '".date("d-m-Y H:i:s")."'");
				if($data_visitor != NULL) {
					if(!$this->session->userdata('pranataindonesia.ac.id')) {
						$data = array(
							'ip' => $_SERVER['REMOTE_ADDR'],
							'os' => $this->agent->platform(),
							'browser' => $agent,
							'tanggal' => date("Y-m-d H:i:s")
						);
						$this->Visitor_Model->InsertData('visitor', $data);
						$this->session->set_userdata('calonpresident_blogspot_com',"Admin PORTAL");
						setcookie("pranataindonesia_ac_id",'Admin PORTAL', time()+3600*24);
					} else {
						setcookie("pranataindonesia_ac_id",'Admin PORTAL', time()+3600*24);
					}
				} else {
					$data = array(
							'ip' => $_SERVER['REMOTE_ADDR'],
							'os' => $this->agent->platform(),
							'browser' => $agent,
							'tanggal' => date("Y-m-d H:i:s")
					);
					$this->Visitor_Model->InsertData('visitor', $data);
					$this->session->set_userdata('pranataindonesia_ac_id',"Admin PORTAL");
					setcookie("pranataindonesia_ac_id",'Admin PORTAL', time()+3600*24);
				}
			}
		}
	}

}
