<?php

    namespace src\controllers;

    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;

    use src\models\Model as BlogModel;


    class Controller
    {

        private $content = array();
        private $httpStatusCode = 406;

        public function getFeed(Request $request, Response $response, array $args): Response{


            try{
                $feed = new BlogModel();
                $all_feed = $feed->getFeed();


                $this->content['feed'] = $all_feed;
                $this->httpStatusCode = 200;

            } catch (\Exception $e) {
                $this->content['message'] = $e->getMessage();
            }
            return $response->withJSON($this->content)->withStatus($this->httpStatusCode);
        }



        public function getAllContacts(Request $request, Response $response, array $args): Response{


            try{
                $contacts = new BlogModel();
                $all_contacts = $contacts->getAllContacts();


                $this->content['contacts'] = $all_contacts;
                $this->httpStatusCode = 200;

            } catch (\Exception $e) {
                $this->content['message'] = $e->getMessage();
            }
            return $response->withJSON($this->content)->withStatus($this->httpStatusCode);
        }



        public function storeContacts(Request $request, Response $response, array $args):Response{

            try{

                if(empty($request->getParsedBody()['nome']))
                    throw new \Exception("Nome vazio");
                if(!isset($request->getParsedBody()['nome']))
                    throw new \Exception("Informe um Nome");

                if(empty($request->getParsedBody()['email']))
                    throw new \Exception("Email vazio");
                if(!isset($request->getParsedBody()['email']))
                    throw new \Exception("Informe um Email");

                if(empty($request->getParsedBody()['telefone']))
                    throw new \Exception("Telefone vazio");
                if(!isset($request->getParsedBody()['telefone']))
                    throw new \Exception("Informe um Telefone");

                if(empty($request->getParsedBody()['mensagem']))
                    throw new \Exception("Mensagem vazia");
                if(!isset($request->getParsedBody()['mensagem'])){
                    throw new \Exception("Informe uma Mensagem");
                }
                else

                $infos = new BlogModel();

                $infos->setNome($request->getParsedBody()['nome']);
                $infos->setEmail($request->getParsedBody()['email']);
                $infos->setTelefone($request->getParsedBody()['telefone']);
                $infos->setMensagem($request->getParsedBody()['mensagem']);



                $this->content['retorno'] =  $infos->storeContacts();
                $this->httpStatusCode = 200;

            }catch(\Exception $e){
                $this->content['message'] = $e->getMessage();
            }
            return $response->withJSON($this->content)->withStatus($this->httpStatusCode);
        }




    }
