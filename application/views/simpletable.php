<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

<thead>
<tr>
<th><?php echo implode('</th><th>', array_keys(current($model))); ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($model as $row): ; ?>
    <tr>
        <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
</tbody>