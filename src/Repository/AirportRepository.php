<?



public function findAirport($airport): array
{
    $em = $this->getEntityManager();

    $query = $em->createQuery(
        'SELECT p
        FROM App\Entity\airport
        WHERE p.airport === :airport
        ORDER BY airport ASC'
    )->setParameter('airport', 10);

    // returns an array of Product objects
    return $query->execute();
}