<?php


namespace App\Util;
use App\Entity\VisitasColonia;
use App\Entity\VisitaColoniaImages;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

class VisitaColoniaImagesNormalizer implements NormalizerInterface
{
    use SerializerAwareTrait;
    /**
     * @var DenormalizerInterface|NormalizerInterface
     */
    private $normalizer;
    /**
     * @var string
     */
    private $baseUrl;
    /**
     * @var string
     */
    private $imagePath;
    /**
     * UserNormalizer constructor.
     * @param NormalizerInterface $normalizer
     * @param $imagePath
     * @param $baseUrl
     */
    public function __construct(NormalizerInterface $normalizer, string $imagePath = null, string $baseUrl = null)
    {
        if (!$normalizer instanceof DenormalizerInterface)
        {
            throw new \InvalidArgumentException('The normalizer must implement the DenormalizerInterface');
        }
        $this->normalizer = $normalizer;
        $this->imagePath = $imagePath;
        $this->baseUrl = $baseUrl;
    }
    /**
     * Normalizes an object into a set of arrays/scalars.
     *
     * @param object $object object to normalize
     * @param string $format format the normalization result will be encoded as
     * @param array $context Context options for the normalizer
     *
     * @return array
     */
    public function normalize($object, $format = null, array $context = array())
    { 
        $result = $this->normalizer->normalize($object, $format, ['groups' => ['visita']]);
        //die(var_dump($result));
        if ('json' !== $format || !is_array($result))
        {
            return $result;
        }

        if (isset($result['visitaColoniaImages']))
        {
           
            foreach ($result['visitaColoniaImages'] as $clave=>$valor) {
                if (!preg_match('/http:|https:/', $valor["image"])){
                    $valor["image"] = join(
                    [
                    $this->baseUrl .
                    $this->imagePath,
                    $valor["image"],
                    ], '/'
                    );
                    $result["visitaColoniaImages"][$clave]=$valor;
                }
            }
           

        }
        return $result;
    }
    /**
     * Checks whether the given class is supported for normalization by this normalizer.
     *
     * @param mixed $data Data to normalize
     * @param string $format The format being (de-)serialized from or into
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        if (($format == "json") && $data instanceof VisitasColonia)
        {
            return true;
        }

        
        return false;
    }
}
