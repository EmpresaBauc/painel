<?php
      $sql = mysqli_query($conexao,"select * FROM (select id, name, surname, hide_online from lh_users where id=departments_ids) AS A inner join (select user_id, last_activity, active_chats from lh_userdep where user_id=dep_id) as B WHERE a.id=b.user_id") or die("Erro");
      echo " <table class='table table-condensed'>
                <tr class= 'active'>
                  <td class='row'>
                    <div class='col-md-8'>
                      <h4>Nome</h4>
                    </div>
                    <div class='col-md-2 text-center'>
                      <h4>Chats Ativos</h4>
                    </div>
                    <div class='col-md-2 text-center'>
                      <h4>Status</h4>
                    </div>
                  </td>";
                  while($dados=mysqli_fetch_assoc($sql))
                  {
                    if(($dados['hide_online']==1)||($dados['last_activity']==0))
                    {
                      $status='Offline';
                      $cor='danger';
                    }
                    else
                    {
                      $status='Online';
                      $cor='success';
                    }
                    echo '<tr class="'.$cor.'"><td class="row">'.'<div class="col-md-8"><h4>'.
                            $dados['name'].' '.$dados['surname'].'</h4></div><div class="col-md-2 text-center"><h4>'.$dados['active_chats'].'</h4></div><div class="col-md-2 text-center"><h4>'.$status.'</h4></div>'.'</td></tr>';
                  };
      echo "</table>";
?>