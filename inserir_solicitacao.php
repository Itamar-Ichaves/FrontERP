<div class="central">
<div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Fazer Cotação </span>
						<div>
							<a href="index.php?link=3" class="btn btn-verde mx-1 d-inline-block"><i class="fas fa-check"></i> Finalizar cotação</a>
						</div>
				</div>
<div class="conteudo-fluido">
				
            <form action="" method="Post">  								
                <div class="rows">	  	

                    <div class="col-6">
                        <div class="caixa mb-3 border mt-3">
                            <div class="h5 bg-title2 d-inline-block width-100 py-1 px-3 text-branco text-uppercase">
                                <span class="d-inline-block"><i class="fas fa-arrow-right"></i> Solicitações </span>
                            </div>			   
                            <div class="col-12 mb-3">
                                <label class="text-label">Solicitação</label>
                                <div class="rows">
                                    <div class="col-6">
                                        <select class="form-campo" name="id_solicitacao" id="id_solicitacao">
                                            <option value="">Escolha uma Opção</option>
                                       </select>
                                    </div>

                                    <div class="col-3">
                                        <input type="button" class="btn btn-roxo width-100" value="Inserir" id="btnInserirSolicitacao">
                                    </div>
                                    <div class="col-3 px-2">
                                        <a href="#janela1" rel="modal" class="btn btn-azul width-100">Múltiplos</a>
                                    </div>
                                </div>

                            </div>
                        
                            <div class="tabela-responsiva sm tborder tborder px-3 pb-3">    
                                <div class="rolagem-tabela">
                                    <table cellpadding="0" cellspacing="0" class="mb-0 table-bordered">
                                        <thead>
                                            <tr>
                                                <th align="center">id</th>
                                                <th align="left">Produto</th>
                                                <th align="center">Status</th>
                                                <th align="center">Qtde</th>
                                                <th align="center">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody id="lista_solicitacao"> 
                                             <tr> 
                                                    <td align="center">1</td>
                                                    <td align="center">Panela cabo grande</td>
                                                    <td align="center">Em andamento</td>
                                                    <td align="center">2</td>
                                                    <td align="center"><a href="javascript:;" onclick="excluirFornecedorCotacao(4,1)" class="link-vermelho"><i class="fas fa-trash-alt h5 mb-0"></i><!-- Excluir--></a>
                                                    </td>
                                            </tr>    	
                                        </tbody>
                                    </table>


                                </div>	
                            </div>	            
                        </div>            
                    </div>

                    <div class="col-6">
                        <div class="caixa mb-3 border mt-3">
                            <div class="h5 bg-title d-inline-block width-100 py-1 px-3 text-branco text-uppercase">
                                <span class="d-inline-block"><i class="fas fa-arrow-right"></i> Fornecedores </span>
                            </div>					
                            <div class="col-12 mb-3">
                                <label class="text-label d-block">Fornecedores</label>
                                <div class="rows">
                                    <div class="col-6">
                                        <select class="form-campo" name="id_contato" id="id_contato">
                                            <option value="">Escolha uma Opção</option>
                                            <option value="1">	Manoel Itamar </option><option value="3">	Fornecedor 2 </option><option value="4">	Fornecedor3 </option>                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <input type="hidden" id="id_produto" name="id_produto">
                                        <input type="button" class="btn btn-roxo width-100" value="Inserir" id="btnInserirFornecedor">
                                    </div>

                                    <div class="col-3 px-2">
                                        <a href="#janela2" rel="modal" class="btn btn-azul width-100">Múltiplos</a>
                                    </div>
                                </div>
                            </div>
                      
                            <div class="tabela-responsiva sm tborder px-3 pb-3">
                                <div class="rolagem-tabela">
                                    <table cellpadding="0" cellspacing="0" class="mb-0 table-bordered">
                                        <thead>
                                            <tr>
                                                <th align="center">Item</th>
                                                <th align="center">ID</th>
                                                <th align="center">Nome</th>
                                                <th align="center">Email</th>      
                                                <th align="center">Fone</th>         
                                                <th align="center">Ação</th>        

                                            </tr>
                                        </thead>
                                        <tbody id="lista_fornecedor"> 
                                           <tr class="status-bg"> 
                                                    <td align="center">1</td>
                                                    <td align="center">1</td>
                                                    <td align="center">Manoel Itamar</td>
                                                    <td align="center">Ichaves@gmail.com</td>	
                                                    <td align="center"></td>
                                                    <td align="center"><a href="javascript:;" onclick="excluirFornecedorCotacao(4,1)" class="link-vermelho"><i class="fas fa-trash-alt h5 mb-0"></i><!-- Excluir--></a>
                                                    </td>
                                            </tr>
    	
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pb-4 pt-3">
                                    <!--<span class="h6 d-block text-center mb-1">Data de Início: <h2 class="text-azul">2019-10-07</h2></span>
                                    <input type="date" value="2019-10-07" name="data_abertura" readOnly="true" class="bg-none m-auto p-0 text-azul d-block text-center h4 width-10">-->
                         
                        <input type="hidden" name="id_cotacao" value="2">
                      <!--  <input type="submit" class="btn btn-verde m-auto h4"  value="Finalizar Cotação" >-->
                    </div>	


                </div>
        </form>			
        </div>
</div>


<!--modal solocitação-->
<div class="window" id="janela1">
    <div class="caixa mb-0">
        <div class="bg-title2 width-100 d-inline-block py-1 px-3 text-branco text-uppercase">
            <span class="d-inline-block pt-1"><i class="fas fa-arrow-right"></i> Selecionar múltiplas solicitações</span>
            <a href="" class="fechar">x</a>
        </div>
        <div class="px-4">
            <div class="rows py-3">
                <div class="col-6">
                    <label class="text-label">Pesquisar por nome</label>
                    <input type="text" name="" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-3">
                    <label class="text-label">Selecione uma opção</label>
                    <select class="form-campo">
                        <option value="S">Sim </option>
                        <option value="N">Não </option>
                    </select>
                </div>
                <div class="col-3 mt-1 pt-1">
                    <input type="submit" name="" value="PESQUISAR" class="btn btn-roxo width-100">
                </div>
            </div>
            <div class="tabela-responsiva sm tborder">					
                <span class="text-label d-block">Resultado</span>
                <div class="rolagem-tabela2">
                    <form action="">
                        <table cellpadding="0" cellspacing="0" class="table-bordered">
                            <thead>
                                <tr>
                                    <th align="center" width="90"><div class="check"><input type="checkbox" name="" id="marcar_0"><label for="marcar_0" class="float-left"></label></div> Todos</th>
                                    <th align="left">Produto</th>
                                    <th align="center" width="40">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="status-bg">
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_1"><label for="marcar_1"></label></div></td>
                                    <td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>
                                <tr class="status-bg"> 
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_2"><label for="marcar_2"></label></div></td>
                                    <td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>
                                <tr> 
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_3"><label for="marcar_3"></label></div></td>
                                    <td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>
                                <tr> 
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_4"><label for="marcar_4"></label></div></td>
                                    <td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>
                                <tr> 
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_5"><label for="marcar_5"></label></div></td>
                                    <td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>
                                <tr> 
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_6"><label for="marcar_6"></label></div></td>
                                    <td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>
                                <tr> 
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_7"><label for="marcar_7"></label></div></td>
                                    <td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>			
                            </tbody>
                        </table>
                    </form>
                </div>	
            </div>
        </div>
        <div class="col-12 py-4">
            <input type="submit" class="btn btn-azul m-auto px-4" value="Enviar marcados">
        </div>
    </div>
</div>


<!--modal fornecedores-->
<div class="window" id="janela2">
    <div class="caixa mb-0">
        <div class="bg-title width-100 d-inline-block py-1 px-3 text-branco text-uppercase">
            <span class="d-inline-block pt-1"><i class="fas fa-arrow-right"></i> Selecionar múltiplos fornecedores</span>
            <a href="" class="fechar">x</a>
        </div>
        <div class="px-4">
            <div class="rows py-3">
                <div class="col-10">
                    <label class="text-label">Pesquisar por nome</label>
                    <input type="text" name="" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-2 mt-1 pt-1">
                    <input type="submit" name="" value="PESQUISAR" class="btn btn-roxo width-100">
                </div>
            </div>

            <div class="tabela-responsiva sm tborder">										
                <span class="text-label d-block">Resultado</span>
                <div class="rolagem-tabela2">
                    <form action="">
                        <table cellpadding="0" cellspacing="0" class="table-bordered">
                            <thead>
                                <tr>
                                    <th align="center"><div class="check"><input type="checkbox" name="" id="marcar_00"><label for="marcar_00" class="float-left"></label></div> Todos</th>
                                    <th align="left">Produto</th>
                                    <th align="center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="status-bg">
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_01"><label for="marcar_01"></label></div></td>
                                    <td align="left">Manoel Itamar | Ichaves@gmail.com</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>
                                <tr>
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_02"><label for="marcar_02"></label></div></td>
                                    <td align="left">Manoel Itamar | Ichaves@gmail.com</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>	
                                <tr>
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_03"><label for="marcar_03"></label></div></td>
                                    <td align="left">Manoel Itamar | Ichaves@gmail.com</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>	
                                <tr>
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_04"><label for="marcar_04"></label></div></td>
                                    <td align="left">Manoel Itamar | Ichaves@gmail.com</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>	
                                <tr>
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_05"><label for="marcar_05"></label></div></td>
                                    <td align="left">Manoel Itamar | Ichaves@gmail.com</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>	
                                <tr>
                                    <td align="center"><div class="check"><input type="checkbox" name="" id="marcar_06"><label for="marcar_06"></label></div></td>
                                    <td align="left">Manoel Itamar | Ichaves@gmail.com</td>
                                    <td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
                                </tr>		
                            </tbody>
                        </table>
                    </form>
                </div>	
            </div>
        </div>
        <div class="col-12 py-4">
            <input type="submit" class="btn btn-azul m-auto px-4" value="Enviar marcados">
        </div>
    </div>
</div>

<div id="mascara"></div>