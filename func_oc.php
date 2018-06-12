<?php function oc(){
		$i = 1;
		if (empty($_POST['oc'])) {

			$ep = $_SESSION['ep'];
			$ppi = $_SESSION['ppi'];
			$def = $_SESSION['def'];
		?>
<table class="table">
			<thead>
				<tr>
					<th>O candidato</th>
				</tr>
			</thead>
			<tr>
				<td>
					Documentos de identificação (RG e CPF);
				</td>
			</tr>
			<tr>
				<td>
					 Comprovante de quitação eleitoral;
				</td>
			</tr>
			<tr>
				<td>
					 Certificado militar (para candidatos do sexo masculino);
				</td>
			</tr>
			<tr>
				<td>
					Atestado de vacinação contra rubéola (para candidatas do sexo feminino até 40 anos – Lei nº
10.196/1996/SC);
				</td>
			</tr>
			<tr>	
				<td>
					Declaração negativa, assinada, de matrícula simultânea em outro curso de graduação da UFSC
ou em outra instituição pública de ensino superior (impressa pelo candidato na Etapa Online da
matrícula)
				</td>
			</tr>
			<tr>
				<td>
					Certificado e histórico escolar do ensino médio ou equivalente ou diploma de ensino superior,
observando-se as especificidades das exigências dadas acima
					<?php if ($ep == 1) {
						echo ", sendo este comprobatório de haver	cursado integralmente o ensino médio ou equivalente em escola pública;";
						?>
				</td>
			</tr>
			
			<?php }

			if ($ppi == 1) {?>
				<tr>
					<td>
						<?php echo "Autodeclarado preto, pardo ou indigena;";?>
						
					</td>
				</tr>
			<?php }
			 
			if ($def == 1) {?>
				<tr>
					<td>
						<?php echo "Laudo médico realizado no máximo doze meses anteriores à inscrição no processo seletivo, que deverá estar assinado por um médico especialista na área da deficiencia do candidato.  Para candidatos com Deficiência Auditiva (Surdez), além do laudo médico, devem apresentar
								exame de audiometria. Para candidatos com Deficiência Visual, além do laudo médico, devem apresentar exame
								oftalmológico em que conste a acuidade visual.";?>
					</td>
				</tr>

			<?php 
			}


		} else if (isset($_POST['oc'])) {
			foreach ($_POST['oc'] as $oc) {
			?>
			<thead>
				<tr class="thead-light">
					<th>
						<?php echo $i ."ª pessoa<br>";
						if ($i == 1) {
							echo "(O próprio candidato) <br>";?>
					</th>
				</tr>
			</thead>

		<?php
			$ep = $_SESSION['ep'];
			$ppi = $_SESSION['ppi'];
			$def = $_SESSION['def'];
		?>

			<tr>
				<td>
					Documentos de identificação (RG e CPF);
				</td>
			</tr>
			<tr>
				<td>
					 Comprovante de quitação eleitoral;
				</td>
			</tr>
			<tr>
				<td>
					 Certificado militar (para candidatos do sexo masculino);
				</td>
			</tr>
			<tr>
				<td>
					Atestado de vacinação contra rubéola (para candidatas do sexo feminino até 40 anos – Lei nº
10.196/1996/SC);
				</td>
			</tr>
			<tr>	
				<td>
					Declaração negativa, assinada, de matrícula simultânea em outro curso de graduação da UFSC
ou em outra instituição pública de ensino superior (impressa pelo candidato na Etapa Online da
matrícula)
				</td>
			</tr>
			<tr>
				<td>
					Certificado e histórico escolar do ensino médio ou equivalente ou diploma de ensino superior,
observando-se as especificidades das exigências dadas acima
					<?php if ($ep == 1) {
						echo ", sendo este comprobatório de haver	cursado integralmente o ensino médio ou equivalente em escola pública;";
						?>
				</td>
			</tr>
			</thead>
				
			</tr>
			
			<?php }

			if ($ppi == 1) {?>
				<tr>
					<td>
						<?php echo "Autodeclarado preto, pardo ou indigena;";?>
						
					</td>
				</tr>

			<?php }
			 
			if ($def == 1) { ?>
				<tr>
					<td>
						<?php echo "Laudo médico realizado no máximo doze meses anteriores à inscrição no processo seletivo, que deverá estar assinado por um médico especialista na área da deficiencia do candidato.  Para candidatos com Deficiência Auditiva (Surdez), além do laudo médico, devem apresentar
								exame de audiometria. Para candidatos com Deficiência Visual, além do laudo médico, devem apresentar exame
								oftalmológico em que conste a acuidade visual.";?>
					</td>
				</tr>
				<?php
						}
			}
			

				$i++;
				switch ($oc) {
					case '1':
						?>
						<tr>
							<td>
								<?php echo "Carteira de Trabalho: cópias das páginas da foto e da identificação, da página do último
										contrato de trabalho registrado e da página seguinte em branco (mesmo que não haja nenhum
										contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco). Somente
										nos casos em que a página de identificação tem inscrição manual (modelo antigo), ou não
										possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso o
										familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
										(formulário VI).";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									echo "Contracheques dos meses de fevereiro, março e abril de 2018";
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									echo "Documento de Rescisão do Contrato de Trabalho, no caso de demissão dentro do período 						estabelecido no item acima";
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril 2018 (corrente, poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados, juntamente com os originais. No caso de não possuir conta bancária, apresentar formulário VII.";
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da
									respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem
									imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração
									não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico 
									http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e
									acessando a informação com o número do seu CPF e data de nascimento).
									";
								?>
							</td>
						</tr>

						<?php
						break;
					case '2':
						?>
						<tr>
							<td>
								<?php
									echo "Carteira de Trabalho: cópias das páginas da foto e da identificação, da página do último
									contrato de trabalho registrado e da página seguinte em branco (mesmo que não haja nenhum
									contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco). Somente
									nos casos em que a página de identificação tem inscrição manual (modelo antigo), ou não
									possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso o
									familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
									(formulário VI).";
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									echo "Declaração de Rendimentos Mensais (formulário II), informando a atividade que realiza e a renda média mensal dos meses de fevereiro, março e abril de 2018, além de outras rendas (pensão, aposentadoria, etc.) quando houver;";
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									echo "Quaisquer comprovantes de recebimento de valores por serviços prestados, se houver.";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
								echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018 (corrente, poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados, juntamente com os originais. No caso de não possuir conta bancária, apresentar formulário VII.";?>
							</td>
						</tr>

						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e acessando a informação com o número do seu CPF).";?>
							</td>
						</tr>

						<tr>
							<td>
								<?php echo "Guias de recolhimento ao INSS com comprovante de pagamento dos meses de fevereiro, março e abril de 2018, compatíveis com a renda declarada.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "DECORE - Declaração Comprobatória de percepção de rendimentos, emitido por contador
ou escritório contábil, devendo constar, no mínimo, as informações dos meses de fevereiro,
março e abril de 2018, referentes à entrada bruta de recursos financeiros do empreendimento
e os pagamentos efetuados mensalmente, incluindo o pró- labore e divisão de lucros. ";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Livro caixa OU demonstrativos de entradas e saídas mensais (formulário VIII), informando à atividade que realiza e a renda média mensal dos meses de fevereiro, março e abril de 2018, bem como outras rendas (pensão, aposentadoria, etc.) se houver.
									";?>
							</td>
						</tr>
					<?php
					break;

					case '3':
					?>
						<tr>
							<td>
								<?php echo "Carteira de Trabalho: cópias das páginas da foto e da identificação, da página do último
								contrato de trabalho registrado e da página seguinte em branco (mesmo que não haja nenhum
								contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco). Somente
								nos casos em que a página de identificação tem inscrição manual (modelo antigo), ou não
								possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso o
								familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
								(formulário VI).";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Declaração de Rendimentos Mensais (formulário II), informando a atividade que realiza e a
								renda média mensal dos meses de fevereiro, março e abril de 2018, além de outras rendas 
								(pensão, aposentadoria, etc.), quando houver;
								";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Quaisquer comprovantes de recebimento de valores por serviços prestados, se houver.";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018 (corrente, poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados, juntamente com os originais. No caso de não possuir conta bancária, apresentar formulário VII.";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e acessando a informação com o número do seu CPF). ";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Guias de recolhimento ao INSS com comprovante de pagamento dos meses de fevereiro, março e abril de 2018, compatíveis com a renda declarada, quando houver";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Livro caixa OU demonstrativos de entradas e saídas mensais (formulário VIII), informando à
								atividade que realiza e a renda média mensal dos meses de fevereiro, março e abril de 2018,
								bem como outras rendas (pensão, aposentadoria, etc.) se houver.";?>
							</td>
						</tr>
					

						<?php
						break;
					case '4':
					?>
						<tr>
							<td>
								<?php echo "Carteira de Trabalho: cópias das páginas da foto e da identificação, da página do último
								contrato de trabalho registrado e da página seguinte em branco (mesmo que não haja nenhum
								contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco). Somente
								nos casos em que a página de identificação tem inscrição manual (modelo antigo), ou não
								possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso o
								familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
								(formulário VI).";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Extrato de pagamento do benefício, referente aos meses de fevereiro, março e abril de 2018.";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018
								(corrente, poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados,
								juntamente com os originais. No caso de não possuir conta bancária, apresentar formulário
								VII.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da
								respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem
								imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração
								não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico
								http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e
								acessando a informação com o número do seu CPF).";?>
							</td>
						</tr>
					
						<?php
						break;
					case '5':
					?>
						
						<tr>
							<td>
								<?php echo "RG e CPF";?>
							</td>
						</tr>
	
						<tr>
							<td>
								<?php echo "Sentença judicial com a especificação do valor OU, caso não haja processo judicial, 
								apresentar declaração, identificando a natureza e o valor, assinada pela pessoa que fornece a
								ajuda, acompanhada de um documento oficial de identificação com foto e assinatura.
								";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo " Comprovantes de recebimento referente aos meses de fevereiro, março e abril de 2018";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Declaração de Pensão Alimentícia – Formulário IX";?>

							</td>
						</tr>

						<?php
						break;

					case '6':
					?>
						<tr>
							<td>
								<?php echo "RG e CPF";?>

							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Contrato de estágio ou termo de compromisso de bolsa;
								";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Comprovantes de recebimento do período de fevereiro, março e abril de 2018.";?>
							</td>
						</tr>

						<tr>
							<td>
								<?php echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018 (corrente,
								poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados, juntamente
								com os originais. No caso de não possuir conta bancária, apresentar formulário VII.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da
								respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem
								imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração
								não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico
								http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e
								acessando a informação com o número do seu CPF).
								";?>
							</td>
						</tr>
					
					<?php
						break;
					case '7':
						?>
						<tr>
							<td>
								<?php echo "Carteira de Trabalho: cópias das páginas da foto e da identificação, da página do último
								contrato de trabalho registrado e da página seguinte em branco (mesmo que não haja nenhum
								contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco). Somente
								nos casos em que a página de identificação tem inscrição manual (modelo antigo), ou não
								possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso o
								familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
								(formulário VI)";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração do Imposto de Renda de Pessoa Jurídica (IRPJ) mais atual, completa, com recibo
							de entrega.";?>
							</td>
						</tr>
				
						<tr>
							<td>
								<?php echo "DECORE -Declaração Comprobatória de percepção de rendimentos, emitido por contador ou
								escritório contábil, devendo constar, no mínimo, as informações dos meses de fevereiro,
								março e abril de 2018, referentes à entrada bruta de recursos financeiros do empreendimento
								e os pagamentos efetuados mensalmente, incluindo o pró- labore e divisão de lucros.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018 (corrente,
								poupança, aplicação financeira, etc.) que deverão ser entregues fotocopiados, juntamente com os
								originais. No caso de não possuir conta bancária, apresentar formulário VII.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da
								respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem
								imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração
								não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico
								http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e 
								acessando a informação com o número do seu CPF).
								";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Livro caixa OU demonstrativos de entradas e saídas mensais (formulário VIII), informando à
								atividade que realiza e a renda média mensal dos meses de fevereiro, março e abril de 2018,
								bem como outras rendas (pensão, aposentadoria, etc.) se houver.";?>
							</td>
						</tr>
					
					<?php
						break;

					case '8':
					?>	
						<tr>
							<td>
								<?php echo "Carteira de Trabalho: cópias das páginas da foto e da identificação da página do último
								contrato de trabalho registrado e da página seguinte em branco (mesmo que não haja nenhum
								contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco). Somente
								nos casos em que a página de identificação tem inscrição manual (modelo antigo), ou não
								possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso o
								familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
								(formulário VI).";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração do SIMPLES mais atual, completo, com recibo de entrega;";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Livro caixa ou demonstrativos de entradas e saídas mensais (formulário VIII), com firma
								reconhecida em cartório do declarante, informando à atividade que realiza e a renda média
								mensal dos meses de fevereiro, março e abril de 2018, bem como outras rendas (pensão,
								aposentadoria, etc.) se houver. ";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018 (corrente,
								poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados, juntamente
								com os originais. No caso de não possuir conta bancária, apresentar formulário VII.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da
								respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem
								imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração
								não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico
								http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e
								acessando a informação com o número do seu CPF).";?>
							</td>
						</tr>
					
					<?php
					break;
					
					case '9':
					?>
						<tr>
							<td>
								<?php echo "Carteira de Trabalho: cópias das páginas da foto e da identificação, da página do último
								contrato de trabalho registrado e da página seguinte em branco (mesmo que não haja nenhum
								contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco). Somente
								nos casos em que a página de identificação tem inscrição manual (modelo antigo), ou não
								possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso o
								familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
								(formulário VI).
								";?>	
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Notas fiscais de vendas do ano de 2017;";?>

							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Declaração do Imposto sobre a Propriedade Territorial Rural (ITR) mais atual;";?>

							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Se houver: Declaração do Imposto de Renda de Pessoa Jurídica (IRPJ) mais atual, completa, com recibo de entrega, ou SIMPLES mais atual, completo, com recibo de entrega;";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração emitida pelo sindicato rural informando a atividade que realiza e a renda bruta
								anual ou a média mensal dos meses de fevereiro, março e abril de 2018 OU preencher a
								declaração de agricultor (formulário III).";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018 (corrente,
								poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados, juntamente
								com os originais. No caso de não possuir conta bancária, apresentar formulário VII.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da
								respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem
								imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração
								não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico
								http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e
								acessando a informação com o número do seu CPF).
								";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Livro caixa OU demonstrativos de entradas e saídas mensais (formulário VIII), informando à
								atividade que realiza e a renda média mensal dos meses de fevereiro, março e abril de 2018,
								bem como outras rendas (pensão, aposentadoria, etc.) se houver.";?>
							</td>
						</tr>
					

						<?php

						break;				
					case '10':
					?>	
						<tr>
							<td>
								<?php echo "Carteira de Trabalho: cópias das páginas da foto e da identificação, da página do último
								contrato de trabalho registrado e da página seguinte em branco (mesmo que não haja nenhum
								contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco). Somente
								nos casos em que a página de identificação tem inscrição manual (modelo antigo), ou não
								possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso o
								familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
								(formulário VI).
								";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Comprovante de pagamento do Seguro Desemprego (referente aos meses de fevereiro, março e abril de 2018, se houver);";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração de não percepção de rendimentos (formulário IV)";?>

							</td>
						</tr>
						<tr>
							<td>
								<?php echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018 (corrente,
								poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados, juntamente com
								os originais. No caso de não possuir conta bancária, apresentar formulário VII.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da
								respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem
								imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração
								não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico
								http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e
								acessando a informação com o número do seu CPF).
								";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Demonstrativos de saídas mensais – pessoa física (formulário VIII), com firma reconhecida
								em cartório do declarante, informando à atividade que realiza e a renda média mensal dos
								meses de fevereiro, março e abril de 2018, bem como outras rendas (pensão, aposentadoria,
								etc.) se houver.
								";?>
							</td>
						</tr>
					
						<?php
						break;
					
					case '11':
						?>
						<tr>
							<td>
								<?php echo "Carteira de Trabalho: cópias das páginas da foto e da identificação, da página do último 
								contrato de trabalho registrado e da página seguinte em branco (mesmo que não haja nenhum
								contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco). Somente
								nos casos em que a página de identificação tem inscrição manual (modelo antigo), ou não
								possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso o
								familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
								(formulário VI).
								";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da
								respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem
								imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração
								não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico
								http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e
								acessando a informação com o número do seu CPF).";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018 (corrente,
								poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados, juntamente
								com os originais. No caso de não possuir conta bancária, apresentar formulário VII.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Contrato (s) de locação ou arrendamento (s) devidamente registrado (s) em cartório, quando
								houver, acompanhado do recibo dos meses de fevereiro, março e abril de 2018";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Livro caixa OU demonstrativos de entradas e saídas mensais (formulário VIII), informando à
								atividade que realiza e a renda média mensal dos meses de fevereiro, março e abril de 2018,
								bem como outras rendas (pensão, aposentadoria, etc.) se houver.";?>
							</td>
						</tr>
					
					<?php
						break;
					
					case '12':
					?>	
						<tr>
							<td>
								<?php echo "Carteira de Trabalho: cópias das páginas da foto e da identificação, da página do último
								contrato de trabalho registrado e da página seguinte em branco ( mesmo que não haja
								nenhum contrato de trabalho, deve-se tirar cópia da primeira folha do contrato em branco).
								Somente nos casos em que a página de identificação tem inscrição manual (modelo antigo),
								ou não possua carteira de trabalho, juntar cópia do documento de Identidade e CPF. Caso
								o familiar seja maior de 18 anos e não possua carteira de trabalho preencher declaração
								(formulário VI)";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Extratos de todas as contas bancárias dos meses de fevereiro, março e abril de 2018
								(corrente, poupança, aplicação financeira, etc.), que deverão ser entregues fotocopiados,
								juntamente com os originais. No caso de não possuir conta bancária, apresentar formulário
								VII.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Declaração de IRPF acompanhada do recibo de entrega à Receita Federal do Brasil e da respectiva notificação de restituição, quando houver. (Dispensados de declarar IRPF devem
									imprimir sua “Situação das Declarações IRPF 2018”, contendo a informação “sua declaração
									não consta na base de dados da Receita Federal”, que deve ser obtida no endereço eletrônico
									http://www.receita.fazenda.gov.br/Aplicacoes/Atrjo/ConsRest/Atual.app/paginas/index.asp e
									acessando a informação com o número do seu CPF).";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Cópia da Carteira de pescador profissional;";?>
							</td>
						</tr>
			
						<tr>
							<td>
								<?php echo "Declaração do sindicato, associação ou similar, especificando a renda mensal recebida ou
								documento correspondente OU declaração de Rendimentos (formulário II) informando a
								atividade que realiza e a renda média mensal dos meses de fevereiro, março e abril de 2018,
								bem como outras rendas (pensão, aposentadoria, etc.) quando houver.";?>
							</td>
						</tr>
					
						<tr>
							<td>
								<?php echo "Livro caixa OU demonstrativos de entradas e saídas mensais (formulário VIII), informando à
								atividade que realiza e a renda média mensal dos meses de fevereiro, março e abril de 2018,
								bem como outras rendas (pensão, aposentadoria, etc.) se houver.";?>
							</td>
						</tr>
					

						<?php
						break;

					case '13':
					?>
						<tr>
							<td>
								<?php echo "Menor de idade<br>";?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo "RG ou CPF<br>";?>
								
							</td>
						</tr>
						
					<?php
					default:
						break;
					}?>
		
				<?php 
				} ?>

				</table>
				
				<table class="table">
				<thead>
					<tr>
						<strong>Documentos complementares</strong>
					</tr>
				</thead>
					<tr>
						<td>
						
							Comprovante de residência: apresentar de 1 (um) dos meses de fevereiro, março e abril de
2018, obrigatório para todos os candidatos;
						</td>
					</tr>
					<tr>
						<td>
							
							Declaração de Independência Econômica: candidatos que residem sozinhos e/ou são
economicamente independentes, além da comprovação de renda pertinente a sua condição,
deverão entregar “declaração de independência econômica” (formulário V) devidamente
preenchida e reconhecida por duas pessoas, que não possuam nenhum vínculo familiar com
o candidato;
						</td>
					</tr>
					<tr>
						<td>
							Menores de 18 anos: para integrantes do núcleo familiar que não aufere nenhum tipo de
renda deve-se apresentar RG ou Certidão de Nascimento;
							
						</td>
					</tr>
					<tr>
						<td>
							Certidão de Casamento ou Declaração de União Estável: os integrantes do grupo familiar
							devem apresentar Certidão de Casamento ou Declaração de União Estável quando houver;
						</td>
					</tr>
					<tr>
						<td>
							Outras formas de rendimento: os integrantes do núcleo familiar que receberam outros
rendimentos (bolsa família, auxílio reclusão, etc) devem apresentar documentos
comprobatórios.
						</td>
					</tr>
					<tr>
						<td>
							Certidão de Óbito: Nos casos de pais e/ou cônjuges falecidos apresentar certidão óbito. 
						</td>
					</tr>
					<tr>
						<td>
							Menores de 21 anos: Declaração de Pensão Alimentícia – Formulário IX.
						</td>
					</tr>
					<tr>
						<td>
							Declaração de Auxílio de Terceiros: Para os casos nos quais o candidato receba auxílio
financeiro de alguém fora do grupo familiar -Formulário XII.
						</td>
					</tr>
				
	<?php
		}
	}?>

</table>