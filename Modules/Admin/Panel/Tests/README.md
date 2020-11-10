#### Test

- Feature: Test que prueban una llamada http a un controlador donde nos tiene que responder aquello que le hayamos indicado con assetXXXX.

        public function test_if_i_can_do_it(){
            $this->get(route('i_can'))
                ->assetStatus(200);
        }

- Units: Test que prueban la lógica de negocio, estos tests son los verdaderamente importantes ya que prueban los repositorios, tanto como para darse cuenta de si los datos obtenidos por los métodos obtenemos todos los clientes que han de cumplir algo, podemos comprobar si lo obtenido se cumple sino se habrá que producir un assetXXXX referido normalmente al Json que obtenemos. 

        public function test_if_i_can_do_it(){
            $repo = new Repository();
            $result = $repo->getTheResult();
            
            // Comprobacaciones y en caso de error, excepción. 
            if(!result)
                twrow NewException
                
            ...
        }
