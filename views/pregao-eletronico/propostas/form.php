<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <?php if( isset($proposta) && !$show ): ?>
        <th class="text-center v-middle">Marcar<br>Todas</th>
      <?php endif; ?>
      <th class="text-center v-middle">Item</th>
      <th class="v-middle">Descrição</th>
      <th class="text-center v-middle">Tratamento<br>Diferenciado</th>
      <th class="text-center v-middle">Aplicabilidade<br>Decreto 7174</th>
      <th class="text-center v-middle">Aplic. Margem<br>Preferência</th>
      <th class="text-center v-middle">Unid<br>Fornec.</th>
      <th class="text-center v-middle">Qtd.<br>Estimada</th>
      <th class="text-center">&nbsp;</th>
      <th class="text-center">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach( $itens as $idItem => $item ): ?>
        <tr>
          <?php if( isset($proposta) && !$show ): ?>
              <td class="text-center v-middle">
                <?php if( isset($proposta['itens'][$idItem]) ): ?>
                  <input type="checkbox" name="delItem[]" value="<?php echo $idItem; ?>">
                <?php endif; ?>
              </td>
          <?php endif; ?>
          <td class="text-center v-middle"><?php echo $idItem; ?> <input type="hidden" name="idItem[]" value="<?php echo $idItem; ?>"></td>
          <td class="v-middle"><?php echo $item['descricao']; ?></td>
          <td class="text-center v-middle"><?php echo $item['tratamento_diferenciado']; ?></td>
          <td class="text-center v-middle"><?php echo $item['aplicabilidade_decreto_7174']; ?></td>
          <td class="text-center v-middle"><?php echo $item['aplic_margem_preferencia']; ?></td>
          <td class="text-center v-middle"><?php echo $item['unid_fornec']; ?></td>
          <td class="text-center v-middle"><?php echo $item['qtd_estimada']; ?></td>
          <td class="text-center v-middle"><strong>Valor Unit.(R$)</strong><br>
              <?php if( !isset($proposta['itens'][$idItem]['valor_unit']) || $alterar ): ?>
                  <input type="text" name="valor_unit[]" class="valor_unit money" value="<?php echo isset($proposta['itens'][$idItem]['valor_unit']) ? $proposta['itens'][$idItem]['valor_unit'] : ''; ?>" <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>>
              <?php else: ?>
                  <?php echo $proposta['itens'][$idItem]['valor_unit']; ?>
              <?php endif; ?>
          </td>
          <td class="text-center v-middle"><strong>Valor Total(R$)</strong><br>
              <?php if( !isset($proposta['itens'][$idItem]['valor_total']) || $alterar ): ?>
                  <input type="text" name="valor_total[]" class="valor_total" style="cursor: not-allowed;" readonly="readonly" value="<?php echo isset($proposta['itens'][$idItem]['valor_total']) ? $proposta['itens'][$idItem]['valor_total'] : ''; ?>" <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>>
              <?php else: ?>
                  <?php echo $proposta['itens'][$idItem]['valor_total']; ?>
              <?php endif; ?>
          </td>
        </tr>
        <tr>
          <td class="text-center v-middle">&nbsp;</td>
          <td class="v-middle" colspan="4"><strong>Marca</strong><br>
            <?php if( !isset($proposta['itens'][$idItem]['marca']) || $alterar ): ?>
                <input type="text" name="marca[]" class="marca form-control" value="<?php echo isset($proposta['itens'][$idItem]['marca']) ? $proposta['itens'][$idItem]['marca'] : ''; ?>" <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>>
            <?php else: ?>
                <?php echo $proposta['itens'][$idItem]['marca']; ?>
            <?php endif; ?>
          </td>
          <td class="v-middle" colspan="5"><strong>Fabricante</strong><br>
            <?php if( !isset($proposta['itens'][$idItem]['fabricante']) || $alterar ): ?>
                <input type="text" name="fabricante[]" class="fabricante form-control" value="<?php echo isset($proposta['itens'][$idItem]['fabricante']) ? $proposta['itens'][$idItem]['fabricante'] : ''; ?>" <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>>
            <?php else: ?>
                <?php echo $proposta['itens'][$idItem]['fabricante']; ?>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <td class="text-center v-middle">&nbsp;</td>
          <td class="v-middle" colspan="9"><strong>Descrição detalhada do objeto ofertado</strong><br>
            <?php if( !isset($proposta['itens'][$idItem]['descricao']) || $alterar ): ?>
                <textarea class="descricao form-control" name="descricao[]" rows="5" <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>><?php echo isset($proposta['itens'][$idItem]['descricao']) ? $proposta['itens'][$idItem]['descricao'] : ''; ?></textarea>
            <?php else: ?>
                <?php echo $proposta['itens'][$idItem]['descricao']; ?>
            <?php endif; ?>
          </td>
        </tr>
        <?php //if( !isset($proposta['itens'][$idItem]) || $alterar ): ?>
            <!--<tr>
              <td class="text-center v-middle">&nbsp;</td>
              <td class="v-middle" colspan="8"><strong>Caracteres restantes: </strong><input type="text" name="" value="5000" <?php //echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>></td>
            </tr>-->
        <?php //endif; ?>
      <?php endforeach; ?>
  </tbody>
</table>

<div class="col-md-12 mb-10 text-center" style="border: 1px solid #eee">
  <p>Declaro que estou ciente e concordo com as condições no edital e seus anexos, bem como de que cumpro plenamente os requisitos de habilitação definidos no edital.</p>
  <p class="text-center">
    <label><input type="radio" required="required" name="ciente_edital" value="SIM" <?php echo (isset($proposta['ciente_edital']) && $proposta['ciente_edital'] == 'SIM') ? 'checked="checked"' : ''; ?> <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>> SIM</label>
    <label><input type="radio" required="required" name="ciente_edital" value="NÃO" <?php echo (isset($proposta['ciente_edital']) && $proposta['ciente_edital'] == 'NÃO') ? 'checked="checked"' : ''; ?> <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>> NÃO</label>
  </p>
</div>

<div class="col-md-12 mb-10 text-center" style="border: 1px solid #eee">
  <p>Declaro sob as penas da lei, que até a presente data inexistem fatos impeditivos para a minha habilitação no presente processo licitário, ciente da obrigatoriedade de declarar ocorrências posteriores.</p>
  <p class="text-center">
    <label><input type="radio" required="required" name="ciente_obrigatoriedade" value="SIM" <?php echo (isset($proposta['ciente_obrigatoriedade']) && $proposta['ciente_obrigatoriedade'] == 'SIM') ? 'checked="checked"' : ''; ?> <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>> SIM</label>
    <label><input type="radio" required="required" name="ciente_obrigatoriedade" value="NÃO" <?php echo (isset($proposta['ciente_obrigatoriedade']) && $proposta['ciente_obrigatoriedade'] == 'NÃO') ? 'checked="checked"' : ''; ?> <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>> NÃO</label>
  </p>
</div>

<div class="col-md-12 mb-10 text-center" style="border: 1px solid #eee">
  <p>Declaro para fins do disposto no inciso V do art. 27 da Lei nº 8.666, de 21 de junho de 1993, acrescido pela Lei nº 9.854, de 27 de outubro de 1999, que não emprego menor de 18 (dezoito) anos em trabalho noturno, perigoso ou insalubre e nâo emprego menor de 16 (dezesseis) anos, salvo menor, a partir de 14 (quatorze) anos, na condição de aprendiz, nos termos do inciso XXXIII, do art. 7º da Constituição Federal.</p>
  <p class="text-center">
    <label><input type="radio" required="required" name="declaro_emprego" value="SIM" <?php echo (isset($proposta['declaro_emprego']) && $proposta['declaro_emprego'] == 'SIM') ? 'checked="checked"' : ''; ?> <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>> SIM</label>
    <label><input type="radio" required="required" name="declaro_emprego" value="NÃO" <?php echo (isset($proposta['declaro_emprego']) && $proposta['declaro_emprego'] == 'NÃO') ? 'checked="checked"' : ''; ?> <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>> NÃO</label>
  </p>
</div>

<div class="col-md-12 mb-10 text-center" style="border: 1px solid #eee">
  <p>Declaro que a proposta apresentada para essa licitação foi elaborada de maneira independente, de cordo com o que é estabelecido na Instrução Normativa Nº 2 de 16 de setembro de 2009 da SLTI/MP. <br>Clique <a href="#">aqui</a> para detalhamento dessa declaração.</p>
  <p class="text-center">
    <label><input type="radio" required="required" name="proposta_independente" value="SIM" <?php echo (isset($proposta['proposta_independente']) && $proposta['proposta_independente'] == 'SIM') ? 'checked="checked"' : ''; ?> <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>> SIM</label>
    <label><input type="radio" required="required" name="proposta_independente" value="NÃO" <?php echo (isset($proposta['proposta_independente']) && $proposta['proposta_independente'] == 'NÃO') ? 'checked="checked"' : ''; ?> <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?>> NÃO</label>
  </p>
</div>

<div class="col-md-12 mb-10" style="border: 1px solid #eee">
  <p>Obs: Os itens, cujo campo de proposta estiver em branco, não serão cadastrados, podendo ser encaminhados posteriormente.</p>
</div>

<br>
<div class="row">
    <div class="form-group col-md-12 text-center">
        <a href="<?php echo BASE_URL ?>/propostas/consultar" class="btn btn-primary">Voltar</a>
        <?php if( !$show ): ?>
            <input type="submit" name="cadastrar" value="Incluir" <?php echo (isset($alterar) && !$alterar) ? 'disabled="disabled"' : ''; ?> class="btn btn-primary" />
        <?php endif; ?>
        <?php if(isset($alterar) && !$alterar && !$show): ?>
            <input type="submit" name="alterar" value="Alterar" class="btn btn-primary" />
        <?php endif; ?>
        <?php if(isset($alterar) && !$show): ?>
            <input type="submit" name="excluir" value="Excluir" class="btn btn-primary" onclick="return confirm('Tem certeza que deseja excluir a(s) proposta(s) selecionada(s)?')" />
        <?php endif; ?>
    </div>
</div>

<script type="text/javascript">

$(function(){
    $("input[name='valor_unit[]']").on('change', function(){
        var valor = parseFloat($(this).val().replace('.', '').replace(',', '.'));
        var qtd   = parseInt($(this).parent().prev().text());
        var total = valor * qtd;
        $(this).parent().next().find('input').val(total.toLocaleString('pt-BR'));
    });
});

</script>