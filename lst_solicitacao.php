<div class="col-9 central mb-3">
<div class="rows">	
                <div class="col-12">
                <div class="caixa">
                    <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Lista de solicitação </span>
                       <div>
							<a href="#addnovo" rel="modal" class="btn btn-verde mx-1 d-inline-block"><i class="fas fa-plus-circle"></i> Adicionar novo</a>
								<a href="" class="btn btn-laranja filtro mx-1 d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
						</div> 
					</div> 
                        
					<form name="busca" action="template_2.php?link=1" method="post">
                        <div class="px-2 pt-2">
							<div class="d-flex text-end">
								<button class="btn btn-roxo mx-1 text-branco" type="submit"><i class="fas fa-arrow-alt-circle-right"></i> Fazer cotação em massa</button>
								
							</div>	
					</form>
					<form name="busca" action="" method="post">
							  <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
							  <div class="rows">
                                        <div class="col-2">	
                                            <label class="text-label d-block text-branco">Data 1</label>
                                            <input type="date" name="categoria" value="" class="form-campo">
                                        </div>
                                        <div class="col-2">	
                                            <label class="text-label d-block text-branco">Data 2</label>
                                            <input type="date" name="categoria" value="" class="form-campo">
                                        </div>
                                        <div class="col-3">	
                                            <label class="text-label d-block text-branco">Produto</label>
                                            <select class="form-campo">
												<option>Opção</option>
												<option>Opção</option>
												<option>Opção</option>
											</select>
                                        </div>
                                        <div class="col-3">	
                                            <label class="text-label d-block text-branco">Status</label>
                                            <select class="form-campo">
												<option>Opção</option>
												<option>Opção</option>
												<option>Opção</option>
											</select>
                                        </div>
                                        <div class="col-2 mt-1 pt-1">
                                                <input type="submit" value="Pesquisar" class="btn btn-roxo text-uppercase">
                                        </div>
                                </div>
                                </div>
                        </div>
                    </form>
                </div>
                </div>

		<div class="col-12">
            <div class="px-2">
                    <div class="tabela-responsiva pb-4">
                    <table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
                            <thead>
                                <tr>
									<th align="center">Marcar</th>
									<th align="center">Id</th>
									<th align="left">Produto</th>
									<th align="center">Data Entrega</th>
									<th align="center">Data Solicitação</th>
									<th align="center">Status</th>
									<th align="center">Qtde</th>
									<th align="center">Usuario</th>
									<th align="center">Editar</th>
									<th align="center">Excluir</th>
								</tr>
                            </thead>
                            <tbody>                                      
                             <tr>
                                <td align="center"><input type="checkbox" name="" value=""></td>
                                <td align="center">1</td>
								<td align="left">Panela cabo grande</td>
								<td align="center">20/08/2019</td>                                											
								<td align="center">20/08/2019</td>                                											
								<td align="center">Em aberto</td>                                											
								<td align="center">50</td>                                											
								<td align="center">Ichaves</td>                                											
                                <td align="center"> <a href="" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a></td>                                    											
                                <td align="center"><a href="" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a> </td>                
                    
                                            						
                        </tbody>
                                </table>
								
                        </div>

                        </div>

                   
                    <!--
                        <div class="caixa p-2">
                                <div class="msg msg-verde">
                                <p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu produto foi inserido com sucesso</p>
                                </div>
                                <div class="msg msg-vermelho">
                                <p><b><i class="fas fa-times"></i> Mensagem de Erro</b> Houve um erro</p>
                                </div>
                                <div class="msg msg-amarelo">
                                <p><b><i class="fas fa-exclamation-triangle"></i> Mensagem de aviso</b> Tem um aviso pra você</p>
                                </div>
                        </div>
                     --> 
                </div>

        </div>
</div>


	<div class="window" id="addnovo">
		<div class="caixa mb-0">
			<span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco position-relative">
				<i class="far fa-arrow-alt-circle-right"></i> CADASTRAR NOVA SOLICITAÇÃO
				<a href="" class="fechar">x</a>
			</span>
			<div class="p-5">
                            <form action="http://comoaprenderphp.com.br/projeto/erp/erp/solicitacao/inserir " method="POST">	
                            <div class="rows  py-3 px-5">							
                                    <div class="col-12">
                                        <label class="text-label">Produto</label>
                                        <select class="form-campo" name="id_produto" id="id_produto">
                                                                                    </select>
                                    </div>
                                    <div class="col-8">
                                            <label class="text-label">Data da Entrega</label>
                                            <input type="date"  name="data_entrega" id="data_entrega" value="2020-01-17" placeholder="Digite aqui..." class="form-campo">
                                    </div>


                                    <div class="col-4">
                                       <label class="text-label"  >Qtde</label>
                                       <input type="text" name="qtde" value="1" id="qtde" placeholder="Digite aqui..." class="form-campo">
                                    </div>                               
                                    <div class="col-12 mt-4">
                                        <input type="submit" value="Salvar alterações" id="btnInserir" class="btn btn-verde btn-medio d-block m-auto">
                                   </div>

                            </div>
                        </form>		
			</div>
		</div>
	</div>
<div id="mascara"></div>