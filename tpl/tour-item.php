<tr class="bounce-table animation-element">
    <td class="subject">
        <div class="date" itemprop="startDate" content="<?=$item['show_date'];?>">
            <span class="day"><?= date("d", strtotime($item['show_date'])); ?></span>
            <span class="month"><?= date("M", strtotime($item['show_date'])); ?></span>
            <span class="year"><?= date("Y", strtotime($item['show_date'])); ?></span>
        </div>
    </td>
    <td  class="location subject" itemprop="location" itemscope itemtype="http://schema.org/Place">
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

                    
            <span itemprop="addressLocality"><?=$item['club_city']['city'];?></span>,
            <span itemprop="addressRegion">(<?=$item['club_city']['country_short'];?>)</span>
        </div>
        <h3><?=$item['title'];?></h3>
    </td>
    <td class="venue subject"  itemprop="name">


        <?php if ($item['event_link']): ?>
            <a target="_blank" itemprop="url"  title="<?=$item['club_name'];?> - <?=$item['club_city'];?> (<?=$item['club_country_code'];?>)" href="<?=$item['event_link'];?>"><?=$item['club_name'];?></a>
        <?php else: ?>
            <?=$item['club_name'];?>
        <?php endif; ?>

        <div class="location-small"><?=$item['club_city']['city'];?> (<?=$item['club_city']['country_short'];?>)</div>
    </td>
    <td class="ticket subject">
    <?php if($item['ticket_link']): ?>
        <a target="_blank" title="Buy ticket" href="<?=$item['ticket_link'];?>" class="ticket">
            Tickets
        </a>
    <?php endif; ?>
    </td>
</tr>